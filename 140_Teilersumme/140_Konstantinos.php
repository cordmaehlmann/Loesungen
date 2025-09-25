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

$x=80;

function teilersumme($x): bool
{
    $array = [];
    for ($i = $x-1; $i >= 1; $i--) {
        if ($x % $i == 0) {
            $array[] =+ $i;
        } else continue;
    }
    var_dump($array);
    return array_sum($array) < $x;

}
var_dump(teilersumme($x));
var_dump(teilersumme(81));
