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

function is_teilersumme_kleiner($zahl) {
    $teilersumme = 0;
    for ($teiler = 1; $teiler <= $zahl / 2; $teiler++) {
        // Ganzzahlig?
        if ($zahl % $teiler == 0) {
            $teilersumme = $teilersumme + $teiler;
        }
    }
    // Teilersumme kleiner als Zahl?
    return $teilersumme < $zahl;
}

echo "81: " . (is_teilersumme_kleiner(81) ? "TRUE" : "FALSE") . "\n";
echo "80: " . (is_teilersumme_kleiner(80) ? "TRUE" : "FALSE") . "\n";

?>