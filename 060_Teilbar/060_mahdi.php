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
 *           die durch 3 ODER 7 teilbar sind.
 */

for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0){
        echo $i . ' ';
    }
}

// Zusatz1
$anzahl = 0;
for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0){
        $anzahl += 1;
    }
}
echo "\nAnzahl der Zahlen ist: $anzahl\n";

//Zusatz2
for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0 || $i % 7 == 0){
        echo "$i ";
    }
}


