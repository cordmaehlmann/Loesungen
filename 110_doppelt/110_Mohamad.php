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
function keineDoppelten(array $arr): bool {

    return count($arr) === count(array_unique($arr));
}


$zahlen1 = [1, 2, 3, 4, 5];
$zahlen2 = [1, 2, 3, 4, 2, 5];

var_dump(keineDoppelten($zahlen1)); 
var_dump(keineDoppelten($zahlen2));