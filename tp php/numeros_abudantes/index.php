<?php
$numeros = array();
$numeros_abundantes = array();
//mientras que i sea menor o igual a 10000 hacer:
for ($i=1; $i <= 10000; $i++) { 
    $numeros[$i] = $i;
}
//si el numero es abundante hacer:

foreach ($numeros as $key => $value) {
    $suma = 0;
    for ($i=1; $i <= $value/2; $i++) { 
        if ($value % $i == 0) {
            $suma += $i; 
        }
    }
    if ($suma > $value) {
        $numeros_abundantes[$key] = $value;
    }
}
foreach ($numeros_abundantes as $key => $value) {
    echo $value . "<br>";
}
?>
