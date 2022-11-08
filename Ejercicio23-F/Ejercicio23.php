<?php
$cadena="Hola";
$vocales[];
foreach (count_chars($cadena, 1) as $i => $val) 
	{
	if (preg_match('/[aeiouáéíóúü]/i',chr($i)))
        {
	        $vocales[] = $vocales + $val;
        }
    }
var_dump($vocales);
?>