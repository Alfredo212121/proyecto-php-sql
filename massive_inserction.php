<?php include("sesion.php"); ?>

<?php
include("config.php");

// Activar reporte de errores de MySQLi para ver problemas graves
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$filename = "MOCK_DATA.csv";

if (($handle = fopen($filename, "r")) !== FALSE) {

    fgetcsv($handle, 1000, ","); // Saltar encabezados

    $sql = "INSERT INTO Nba_Players (player_id, player_name, team, position, height, points_per_game, assists_per_game) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $sql);

    // 1. VERIFICAR SI LA CONSULTA SE PREPARÓ BIEN
    if ($stmt === false) {
        die("Error preparando la consulta (Revisa nombre de tabla/columnas): " . mysqli_error($conn));
    }

    // Inicializamos variables para evitar warnings antes del bind
    $player_id = $player_name = $team = $position = null;
    $height = $points_per_game = $assists_per_game = 0;

    mysqli_stmt_bind_param($stmt, "ssssddd", $player_id, $player_name, $team, $position, $height, $points_per_game, $assists_per_game);

    $fila = 1; // Contador para saber en qué fila falla
    $errores_count = 0;

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        
        if (count($data) < 7) { continue; }

        $player_id = $data[0];
        $player_name  = $data[1];
        $team  = $data[2];
        $position = $data[3];
        // Forzamos conversión a float/int para evitar errores de cadena vacía
        $height = !empty($data[4]) ? (float)$data[4] : 0;
        $points_per_game = !empty($data[5]) ? (float)$data[5] : 0;
        $assists_per_game = !empty($data[6]) ? (float)$data[6] : 0;

        // 2. EJECUTAR Y CAPTURAR ERRORES INDIVIDUALES
        if (!mysqli_stmt_execute($stmt)) {
            echo "<div style='color: red;'>Fallo en fila $fila (ID: $player_id): " . mysqli_stmt_error($stmt) . "</div>";
            $errores_count++;
        }
        
        $fila++;
    }

    fclose($handle);
    mysqli_stmt_close($stmt);

    if ($errores_count == 0) {
        echo "<div style='color: green; margin-top: 20px;'>";
        echo "<h2>Successful bulk upload</h2>";
        echo "</div>";
    } else {
        echo "<div style='color: orange; margin-top: 20px;'>";
        echo "<h2>Successful upload with $errores_count errors. Review the messages on the top.</h2>";
        echo "</div>";
    }

} else {
    echo "Error: It´s not possible to open the CSV file.";
}

print "<br/><br/>";
print "<a href='index.php' class='btn btn-primary'>Back to the start</a>";

mysqli_close($conn);
?>
<?php include("footer.html"); ?>