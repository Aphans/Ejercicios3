<?php
$cadena=$_GET['cadena'];
$cas=$_GET['cas'];
$caps=$_GET['caps'];
echo "La cadena es: ".$cadena."<br>"."<br>";
$resultado = str_replace($cas,$caps, $cadena);
echo "La cadena remplazando ".$cas." por ".$caps.":".$resultado;
?>