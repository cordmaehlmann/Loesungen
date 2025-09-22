<?php

/*
 * Teilbar
 *
 * Schreibe ein Skript, das alle Zahlen von 1 bis 100 ausgibt,
 * die durch drei teilbar sind.
 * Hilfsmittel: Schleife, if, Modulo
 *
 * Zusatz 1: Gib die Anzahl der Zahlen aus
 *
 * Zusatz 2: Das Programm soll nun alle Zahlen ausgeben,
 * die durch 3 ODER 7 teilbar sind.
 */
$anzahl=0;
echo  "Zahlen, die durch drei teilbar sind: ";
for($i=1;$i<=100;$i++){
    if($i%3==0){
        echo $i . " ";
        $anzahl++;
    }
}
echo "<br>" . "Anzahl der Zahlen, die durch drei teilbar sind: " . $anzahl;
echo "<br>"."Zahlen, die drei und sieben teilbar sind: ";
for($k=1;$k<=100;$k++){
    if($k%3==0 || $k%7==0){
        echo $k . " ";
    }
}
