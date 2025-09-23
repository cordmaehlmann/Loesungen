<?php

/*
 * Doppelt
 *
 * Schreibe eine Funktion, die überprüft,
 * ob in einem Array keine doppelten Elemente sind.
 * Der Funktion wird das Array übergeben
 * und sie soll true oder false zurückgeben.
 *
 */
function kein_doppelt($array){
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] == $array[$j]) {
                return false;
            }

        }

    }
    return true;
}
$zahl =[1, 2, 3, 3, 5, 6];
var_dump(kein_doppelt($zahl));