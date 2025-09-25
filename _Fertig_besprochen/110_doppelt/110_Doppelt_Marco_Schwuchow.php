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

$t_e_s_t_array = ['B', 'R', 'A', 'T', 'P', 'F', 'A', 'N', 'N', 'E' ];
$t_e_s_t_array2 = ['Z', 'U', 'G', 'A', 'B', 'T', 'E', 'I', 'L' ];
function is_doppelte_vorhanden(array $testarray): bool
{
    for ($i = 0; $i < count($testarray); $i++) {
        echo $i . 'i ';
        for ($j = $i + 1; $j < count($testarray); $j++) {
            echo $j . 'j ';
            if ($testarray[$i] == $testarray[$j]) {
            return true;
            };
        }
        print "\n";
    }
    return false;
}

var_dump(is_doppelte_vorhanden($t_e_s_t_array));
var_dump(is_doppelte_vorhanden($t_e_s_t_array2));
