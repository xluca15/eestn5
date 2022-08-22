
<?php 
function semanaCovid($fecha){ 
$fecha = $_POST['fecha']; 
$hoy = date("Y-m-d"); 
$fechaActual = date_create($hoy); 
$startCovid = date_create($fecha); 
 
$diff = date_diff($startCovid, $fechaActual); 
 
$convertir = $diff -> format('%a'); 
$semanas = $convertir / 7; 
return round($semanas) . " semanas "; 

} 
?>