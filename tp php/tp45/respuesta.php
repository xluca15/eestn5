<?php
    $p1 = $_POST['p1'];
    include_once 'funciones.php';
    echo 'la letra ingresada es ' . (esVocal($p1) ? 'vocal' : 'consonante');
?>