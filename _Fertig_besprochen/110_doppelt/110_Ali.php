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

// kein_Duplikat == f
function f(array $arr): bool
{
    return count($arr) === count(array_unique($arr));
}

var_dump(f([1, 2, 3, 4])); // true
var_dump(f([1, 2, 3, 2])); // false
var_dump(f([1, 2, 3, 4, 5, 6])); // true
var_dump(f([7, 8, 9, 9])); // false
var_dump(f([1, 0, 0, 3])); // false

