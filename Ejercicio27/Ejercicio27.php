<?php
$cadena1="Gato";
$cadena2="Madre";
$lengthCadena1 = strlen($cadena1);
$lengthCadena2 = strlen($cadena2);
$contador=0;
    for($i=0;$i<$lengthCadena1;$i++){
            if($cadena1[$i]==$cadena2[$i]){
                $contador++;
            }
       }
echo $contador;
?>