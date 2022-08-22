<?php
    include_once 'funcion.php';
    $ns = [$_POST["n1"], $_POST["n2"]];
    if(esMayor($ns[0], $ns[1])){
        echo "true <br/>";
        for($i = $ns[0]; $i <= $ns[1]; $i++){
            echo $i . "<br/>";
        }
    }else{
        echo "false <br/>";
    }

?>