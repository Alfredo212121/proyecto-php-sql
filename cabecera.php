<?php
include("sesion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel BD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { background-color: #f4f6f9; }
        .card-header { font-weight: bold; text-transform: uppercase; letter-spacing: 1px; }
        /* Efecto hover en los enlaces de la lista */
        .list-group-item-action:hover {
            background-color: #e9ecef;
            padding-left: 20px;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        .list-group-item i { width: 25px; text-align: center; margin-right: 5px; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-database me-2"></i>Gestor MySQL</a>
            <div class="d-flex">
                <span class="navbar-text me-3 text-light">Welcome</span>
                <a href="logout.php" class="btn btn-outline-danger btn-sm">Disconnect</a>
            </div>
        </div>
    </nav>

    <div class="container pb-5">
        <h2 class="mb-4 text-center text-secondary">Menú</h2>

        <div class="row g-4">
            
            <div class="col-md-6 col-xl-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-secondary text-white text-center">
                        <i class="fas fa-cogs"></i> Structure
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="db_connect.php" class="list-group-item list-group-item-action text-primary">
                            <i class="fas fa-plug"></i> 1. Connect
                        </a>
                        <a href="db_create.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-plus-square"></i> 2. Create BD
                        </a>
                        <a href="db_drop.php" class="list-group-item list-group-item-action text-danger">
                            <i class="fas fa-minus-square"></i> 3. Delete BD
                        </a>
                        <a href="table_create_guests.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-table"></i> 4. Create Table
                        </a>
                        <a href="table_check_exists.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-check-circle"></i> 5. Verificate the Table
                        </a>
                        <a href="table_drop.php" class="list-group-item list-group-item-action text-danger">
                            <i class="fas fa-eraser"></i> 6. Delete the Table
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-success text-white text-center">
                        <i class="fas fa-file-import"></i> Inserciones
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="data_insert_single.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-user-plus"></i> 7. Insert (Individual)
                        </a>
                        <a href="data_insert_single_get_last_id.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-id-card"></i> 8. Insert and see the playerID
                        </a>
                        <a href="data_insert_multiple_simple.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-users"></i> 9. Múltiples (Simple)
                        </a>
                        <a href="data_insert_multiple_prepared.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-shield-alt"></i> 10. Múltiples (Prep)
                        </a>
                         <a href="massive_inserction.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-solid fa-file-import"></i> 19. Massive inserction
                         </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <i class="fas fa-search"></i> Querys
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="data_count.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-calculator"></i> 11. Count querys
                        </a>
                        <a href="data_select_all.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-list"></i> 12. Display all
                        </a>
                        <a href="data_select_where.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-filter"></i> 13. Only "Regine Golde"
                        </a>
                        <a href="data_select_orderby.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-sort-alpha-down"></i> 14. Order
                        </a>
                        <a href="data_select_where_orderby_html_table.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-table"></i> 15. HTML Table
                        </a>
                         <a href="form.php" class="list-group-item list-group-item-action text-info">
                            <i class="fas fa-star"></i> 18. Extra Querys
                        </a>
                    
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-warning text-dark text-center">
                        <i class="fas fa-edit"></i> Edition
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="data_delete.php" class="list-group-item list-group-item-action text-danger">
                            <i class="fas fa-trash"></i> 16. Delete ID=3
                        </a>
                        <a href="data_update.php" class="list-group-item list-group-item-action text-primary">
                            <i class="fas fa-pen"></i> 17. Update ID=2
                        </a>
                    </div>
                    <div class="card-body bg-light text-center text-muted d-flex align-items-center justify-content-center">
                        <small>Zone of irreversible changes</small>
                    </div>
                </div>
            </div>

        </div> </div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>