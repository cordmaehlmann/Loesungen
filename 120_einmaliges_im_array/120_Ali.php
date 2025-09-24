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


$array = [1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7];
$counts = array_count_values($array);

$einmalige_Zahl = null;
foreach ($counts as $zahl => $anzahl) {
    if ($anzahl === 1) {
        $einmalige_Zahl = $zahl;
        break;
    }
}

echo "Die Zahl, die nur einmal in dieser Zahlenreihe vorkommt, ist: $einmalige_Zahl";