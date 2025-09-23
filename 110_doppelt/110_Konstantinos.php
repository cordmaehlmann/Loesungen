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
$array=[2,3,5,6,7,8,9];
$bool = null;
$needle=7;

function checkArray($needle, $array): bool
{
    if (in_array($needle,$array)){
        return true;
    }else
        return false;
}
echo checkArray($needle, $array);