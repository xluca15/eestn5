<?php
$n1 = $_POST['n1'];
include_once ('Funciones.php');
echo "El factorial de " . $n1 . " es " . FACTORIAL($n1);

?>