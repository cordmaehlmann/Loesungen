<?php

/*
 * Einmaliges im Array
 *
 * Schreibe ein Programm, das ein Array mit neun Zahlen befüllt.
 * Dabei sollen vier Zahlen doppelt vorkommen
 * und eine Zahl nur einmal.
 *
 * Schreibe dann ein Programm, das aus diesem Array die Zahl findet,
 * die nur einmal vorkommt.
 */
$zahlenarray = [1,1,2,2,3,3,4,4,5];

function is_einmalig(array $zahlenarray): int
{
    for ($i = 0; $i < count($zahlenarray); $i++) {
        $anzahl = 0;
        for ($j = 0; $j < count($zahlenarray); $j++) {
            if ($zahlenarray[$i] === $zahlenarray[$j]) {
                $anzahl++;
            }
        }
        if ($anzahl === 1) {
            return $zahlenarray[$i];
        }
    }
    return -1;
}

echo is_einmalig($zahlenarray);
