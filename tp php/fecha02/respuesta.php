<?php
    include_once("funcion.php");
    $fecha = $_POST["fecha"];
    echo "La cuarentena arranco hace " . semanaCovid($fecha);
?>