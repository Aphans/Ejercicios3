<?php
$fecha=$_GET['Fecha'];
date_default_timezone_set('Europe/Madrid');
setlocale(LC_TIME, 'spanish');
$timestamp = strtotime($fecha); 
$newDate = date("m-d-Y", $timestamp );
$inicio = strftime("%A, %d de %B del %Y", strtotime($newDate));
echo $inicio;
?> 