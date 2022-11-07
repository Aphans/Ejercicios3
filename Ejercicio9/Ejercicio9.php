<?php
$ciudades = array (
    array(nombre:"Madrid",habitantes:5000),
    array(nombre:"Barcelona",habitantes:15),
  );
function mayorCiudad($array){
    sort($array);
}
echo mayorCiudad($ciudades);
foreach ($ciudades as $key => $value) {
   $fila=$value; // obtiene fila de array actual
   echo $fila["nombre"]."\n"; //accediendo a propiedad
}
?>