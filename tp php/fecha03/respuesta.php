<?php
    include_once("funcion.php");
    $fecha = $_POST["p1"];
    echo "Para año nuevo faltan " . CantidadDias($fecha);
?>