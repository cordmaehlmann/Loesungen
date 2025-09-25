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

// Funktionen
function double($array)
{
    foreach ($array as $key) {
        array_splice($array, 0, 1);
        if (in_array($key, $array)) {
            return false;
        }
    }
    return true;
}

// Hauptprogramm
$liste = [1, 2, 3, 4, 5, 6, 7, 1];
echo double($liste) ? "True" : "False";
