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


function kein_doppelt($zufallListe) :bool{
    sort($zufallListe);
    var_dump($zufallListe);
   if(count(array_unique($zufallListe))===count($zufallListe) ) {
       echo "In der Liste gibt es keine doppelten Element!";
       return true;
   }else {
       echo "In der Liste gibt es doppelte Element!";
       return false;
   }
}
kein_doppelt([1,2,3,4]);
echo "</br>";
kein_doppelt([1,2,3,4,4]);