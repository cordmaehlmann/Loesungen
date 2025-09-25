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
$array1 = [1, 2, 3, 1];  // false
$array2 = [1, 2, 3, 4];  // true

function checkUnique($array) {
    $unique = array_unique($array);
    if (count($array) === count($unique)) {
        echo "true";
    } else {
        echo "false";
    }
}
checkUnique($array1);
echo "<br>";
checkUnique($array2);

