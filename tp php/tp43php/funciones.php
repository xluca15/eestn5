<?php
function FACTORIAL ($n) {
    return ($n == 0) ? 1 : $n * FACTORIAL($n - 1);
};
?>