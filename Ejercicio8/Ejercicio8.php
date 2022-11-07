<?php
$numeros=[];
function generarNumero(){
    for($i=0;$i<100;$i++){
        global $numeros;
        $numeros[$i]=rand(1,10);
    }
}
function cuenta_veces_valor($array, $valor) {
    $contadores = array_count_values($array);
    return $contadores[$valor];
}
generarNumero();
var_dump($numeros);
echo "<br>"."<br>"."<br>";
$numero=10;
echo "El número ".$numero." aparece ".cuenta_veces_valor($numeros,3)." veces";
?>