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

$numbers = [];

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        $numbers[] = $i;
        echo $i . ' ';

    }

}

echo '<br>';
echo 'Die Anzahl der durch drei teilbaren Zahlen ist '. (count($numbers)) . ".\n";
echo '<br>';

$numbers2 = [];

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 || $i % 7 == 0) {
        $numbers2[] = $i;
        echo $i . ' ';

    }

}

echo '<br>';
echo 'Die Anzahl der durch drei oder sieben teilbaren Zahlen ist '. (count($numbers2)) . ".\n";
echo '<br>';