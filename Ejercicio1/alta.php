<?php
$nombre = $_GET['Nombre'];
$apellido = $_GET['Apellido'];
$edad = $_GET['Edad'];
$dni = $_GET['DNI'];
$correo = $_GET['Correo'];
$page = $_GET['page'];
$text = $_GET['feedback'];
echo "<table border=1>";
echo "<tr>";
echo "<th> Nombre </th>";
echo "<th> Apellidos</th>";
echo "<th> Edad</th>";
echo "<th> DNI</th>";
echo "<th> Correo</th>";
echo "<th> P&aacute;gina web</th>";
echo "<th> Sugerencia</th>";
echo "</tr>";
echo "<tr>";
echo "<td> ".$nombre."</td>";
echo "<td> ".$apellido."</td>";
echo "<td> ".$edad."</td>";
echo "<td> ".$dni."</td>";
echo "<td> ".$correo."</td>";
echo "<td> ".$page."</td>";
echo "<td> ".$text."</td>";
echo "</tr>";
echo "</table>";
?>