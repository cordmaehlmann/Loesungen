<?php

/*
 * Bubblesort
 *
 * Schreibe eine Funktion,
 * der man ein nummerisches Array mit
 * beliebig vielen Zahlen als Werten übergeben kann
 * und die dieses Array sortiert und zurück gibt.
 *
 * Benutze hierzu den Bubblesort-Algorithmus.
 * Bei diesem wird das Array durchlaufen
 * und jede Zahl mit der jeweils nachfolgenden Zahl verglichen.
 * Wenn die nachfolgende Zahl kleiner ist,
 * werden die Zahlen getauscht.
 * Das Array wird solange durchlaufen,
 * bis bei einem Durchlauf keine Zahlen getauscht werden müssen.
 */

$testarray = [19,17,15,13,12,9,7,5,3,1];
function sortiere_array($unsortiertes_array) : array {
    if (empty($unsortiertes_array)) {
        return [];
    }
    for ($i = 0; $i < count($unsortiertes_array); $i++) {
        for ($j = 0; $j < count($unsortiertes_array) -1; $j++) {
            if ($unsortiertes_array[$j] > $unsortiertes_array[$j+1]) {
                $k = $unsortiertes_array[$j];
                $unsortiertes_array[$j] = $unsortiertes_array[$j+1];
                $unsortiertes_array[$j+1] = $k;
            }
        }
    }


    return $unsortiertes_array;
}

var_dump(sortiere_array($testarray));

