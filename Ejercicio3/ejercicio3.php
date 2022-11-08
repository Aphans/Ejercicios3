<?php
$numero=$_GET['numero'];
for($i=1;$i<=$numero;$i++){
    for($j=1;$j<=$i;$j++){
        echo $j;
    }
    echo "<br>";
}
for($i=$numero;$i<=$numero;$i--){
    for($j=1;$j<=$i;$j++){
        echo $j;
    }
    echo "<br>";
}
?>