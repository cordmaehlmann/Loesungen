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

function teiler_summe(int $t): bool {
    if ($t <= 1) {
        return false; // Sonderfall bei 0 und 1
    }

    $summe = 0;

    for ($i = 1; $i <= $t / 2; $i++) {
        if ($t % $i === 0) {
            $summe += $i;
        }
    }

    return $summe < $t;
}

// Ausgabe
var_dump(teiler_summe(81)); // true
var_dump(teiler_summe(80)); // false
var_dump(teiler_summe(12)); // false
var_dump(teiler_summe(13)); // true
var_dump(teiler_summe(14)); // true
var_dump(teiler_summe(15)); // true
var_dump(teiler_summe(16)); // true
var_dump(teiler_summe(17)); // true