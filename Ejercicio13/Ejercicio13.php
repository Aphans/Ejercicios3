<?php
$nota1=$_GET['nota1'];
$nota2=$_GET['nota2'];
$nota3=$_GET['nota3'];
$nota4=$_GET['nota4'];
$nota5=$_GET['nota5'];
$nota6=$_GET['nota6'];
$nota7=$_GET['nota7'];
$nota8=$_GET['nota8'];
$nota9=$_GET['nota9'];
$nota10=$_GET['nota10'];
$notas=[$nota1,$nota2,$nota3,$nota4,$nota5,$nota6,$nota7,$nota8,$nota9,$nota10];
$suma=array_sum($notas);
$lenght=count($notas);
echo "La media es: ".$suma/$lenght;
?>