<?php
    function CantidadDias($fecha){    
        $fechaactual = date_create($fecha);
        $fecha_nueva = date_create(date("Y") . "-12-31");
        $diferencia = date_diff($fechaactual, $fecha_nueva);
        return $diferencia->format("%a días");
    }
?>