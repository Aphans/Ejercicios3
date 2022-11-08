<?php
$dni="23157361A";
function sacarLetra($dni){
    $letra = substr($dni, -1);
    return $letra;
}
echo "El DNI es: ".$dni."<br>"."<br>";
echo "La letra del DNI es: ".sacarLetra($dni);
?>