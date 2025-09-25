<?php

/*
 * Teilersumme
 *
 * Schreibe eine Funktion, die überprüft, ob bei einer Zahl
 * die Summe aller Teiler kleiner als die Zahl ist.
 * Die Zahl selber soll hierbei nicht zu den Teilern zählen.
 *
 * Bei 81 würde TRUE zurück gegeben werden, da
 * 1 + 3 + 9 + 27 = 40
 * und 40 < 81
 *
 * Bei 80 würde FALSE zurück gegeben werden, da
 * 1 + 2 + 4 + 5 + 8 + 10 + 16 + 20 + 40 = 106
 * und 106 > 80
 */


function istTeilersummeKleiner($zahl) {
    $summe = 0;  // hier sammeln wir die Teiler

    // Schleife: gehe alle Zahlen von 1 bis zur Hälfte der Zahl durch
    for ($i = 1; $i <= $zahl / 2; $i++) {
        if ($zahl % $i == 0) {   // % bedeutet: passt $i ohne Rest rein?
            $summe = $summe + $i;  // dann addiere ihn
        }
    }

    // Am Ende vergleichen
    if ($summe < $zahl) {
        return true;   // Summe ist kleiner
    } else {
        return false;  // Summe ist gleich oder größer
    }
}
var_dump(istTeilersummeKleiner(81));
var_dump(istTeilersummeKleiner(80));
?>
