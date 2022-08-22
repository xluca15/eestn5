<?php 
    include_once("funcion.php");
    $fecha = $_POST["f1"];
    echo "la fecha 30 dias posteriores es = ". AddDays($fecha, 30);
?>