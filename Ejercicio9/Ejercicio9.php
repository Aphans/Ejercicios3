<?php
$ciudades=array("Madrid"=>100,"Barcelona"=>110);
$ciudadMayor = array_search(max($ciudades),$ciudades);
echo "Ciudades:"."<br>"."<br>";
foreach ($ciudades as $item => $value){
    echo "Ciudad:".$item."<br>"." Habitantes:".$value."<br>"."<br>";
}
echo "La ciudad mayor es:".$ciudadMayor;
?>