<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php

include ("recoge.php");

$value = recoge("valor");

if($value == "insert"){
    header("Location:insert.php");

}elseif($value == "lastname"){
    header("Location:lastname.php");

}elseif($value == "order"){
    header("Location:order.php");

}elseif($value == "delete"){
    header("Location:id.php");

}elseif($value == "update"){
    header("Location:lastnameupdate.php");
}

?>
<?php include("footer.html");?>