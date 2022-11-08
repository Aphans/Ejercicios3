<?php
$cadena="Hola";
foreach (count_chars($cadena, 1) as $i => $val) 
	{
	if (preg_match('/[aeiouáéíóúü]/i',chr($i)))
        {
	        $vocales = $vocales + $val;
        }
    }
echo "La cadena es: ".$cadena."<br>"."<br>";
echo "Vocales: ".$vocales;
?>