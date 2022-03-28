<?php
for ($i=1; $i <= 500; $i++) { 
    echo "$i";
    if($i%4 == 0) echo " (Multiplo de 4)";
    if($i%9 == 0) echo " (Multiplo de 9)";
    if($i%5 == 0) echo "<br/>----------------------------------------";
    echo "<br/>";
} 
?>