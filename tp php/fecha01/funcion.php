<?php
    function AddDays($date, $daysToAdd){
        $date = strtotime("+$daysToAdd days", strtotime($date));
        return date("Y-m-d", $date);
    }


?>