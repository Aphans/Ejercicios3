<?php
$numero=$_GET['numero'];
for ($i = 1; $i <= $numero; $i++){
    echo $i.$i++."<br>";
}
?>