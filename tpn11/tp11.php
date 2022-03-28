<?php
    $ns = [$_POST["n1"], $_POST["n2"]];
    rsort($ns);
    echo "Resultado:  $ns[0] , $ns[1]"; 
?>