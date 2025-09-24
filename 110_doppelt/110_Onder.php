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


function kein_doppelt($a,$b) :bool{
    if(count(array_intersect($a,$b)) < 1){
        echo "TRUE"."</br>";
        return true;
    }else {
        echo "FALSE"."</br>";
        print_r(array_intersect($a,$b));
        return false;
    }
}
kein_doppelt([1,23,3,11,56,45],[1,2,3]);