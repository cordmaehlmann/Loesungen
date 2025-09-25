<?php

/*
 * Teilersumme
 *
 * Schreibe eine Funktion, die überprüft, ob bei einer Zahl
 * die Summe aller Teiler kleiner als die Zahl ist.
 * Die Zahl selber soll hierbei nicht zu den Teilern zählen.
 *
 * Bei 81 würde TRUE zurückgegeben werden, da
 * 1 + 3 + 9 + 27 = 40
 * und 40 < 81
 *
 * Bei 80 würde FALSE zurückgegeben werden, da
 * 1 + 2 + 4 + 5 + 8 + 10 + 16 + 20 + 40 = 106
 * und 106 > 80
 */

// Funktionen
function teiler($zahl) {
    $summe = 0;
    for ($i=1; $i <= $zahl-1; $i++ ) {
        if ($zahl % $i == 0) {
            $summe += $i;
        }
    }
    if ($summe < $zahl) {
        return true;
    }
    else {
        return false;
    }
}


// Hauptprogramm

echo "Teilersumme berechnen\n";
echo "Gib eine Zahl ein: ";
$input = readline("");
$input = (int)$input;
echo teiler($input) ? 'TRUE' : 'FALSE';

// echo teiler($input) ? 'Teilersumme ist kleiner' : 'Teilersumme ist größer';

