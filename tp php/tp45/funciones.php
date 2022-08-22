<?php
function esVocal($p)
{
    $letra = false;
    $letras = ['a', 'e', 'i', 'o', 'u'];
    foreach ($letras as $l) {
        if ($p == $l) $letra = true;
    }
    return $letra;
}
?>