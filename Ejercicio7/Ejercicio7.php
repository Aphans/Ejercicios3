<?php
$numeros=[];
function generarNumero(){
    for($i=0;$i<100;$i++){
        global $numeros;
        $numeros[$i]=rand(1,10);
    }
}
generarNumero();
var_dump($numeros);
?>