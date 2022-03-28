<?php 
    $ns = [$_POST["n1"], $_POST["n2"], $_POST["n3"]];
    $res = $ns[0];
    if($ns[1] > $res) $res = $ns[1];
    if($ns[2] > $res) $res = $ns[2];
    echo "El mayor es: $res";
?>