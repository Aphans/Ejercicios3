<?php
$datos1 = array(1, 5, 3, 4, 3);
$datos2 = array(5, 6, 7, 8, 4);
$total = array();
for($i = 0; $i < 5; $i++) {
    $total[] = $datos1[$i] + $datos2[$i];
}
var_dump($total);
?>