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

$random = rand(0, 15);
$array = [3, 6, 8, 12];
foreach ($array as $a) {
    echo $a . '<br>';
}

if (!in_array($random, $array)) {

    echo 'The randomized number ' . $random . ' is not in the Array.';
    return false;
}
if (in_array($random, $array)) {
    echo 'The randomized number ' . $random . ' is already in the Array.';
    return true;
}

