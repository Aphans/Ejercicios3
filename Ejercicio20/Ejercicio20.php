<?php
$palabra=$_GET['palabra'];
$numero=$_GET['numero'];
function esPolindromo($cadena)
{
    if (strlen($cadena)<2) {
        return false;
    }
    $cadena=strtolower(str_replace([" ", ",", "."], "", $cadena));
    for ($i=0;$i<strlen($cadena);$i++) {
        if ($cadena[$i]!=$cadena[strlen($cadena)-$i-1]) {
            return "No es palíndromo";
        }
    }
    return "Es palíndromo";
}
echo esPolindromo($palabra)."<br>";
if($numero<10000&&($numero-$numero%100)/100==$numero%10){
    echo "El número es capicua";
}
else{
    echo "El número no es capicua";
}
?>