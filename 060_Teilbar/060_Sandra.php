<?php
$zahl = 0;
echo "Zahlen die durch 3 und 7 teilbar sind:<br>";

for ($i =1; $i <= 100;$i++){
    if ($i % 3 == 0 || $i %7 == 0){
        echo $i. " ";
        $zahl++;
    }
}

echo "<br>Anzahl der Zahlen:" . $zahl;
?>
