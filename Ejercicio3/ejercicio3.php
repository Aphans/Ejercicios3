<?php
$numero=$_GET['numero'];
for ($i = 1; $i <= $numero; $i++){
    $numeroAnt = $numeros[$i-1];
    echo $i.$numeroAnt."<br>";
}
?>