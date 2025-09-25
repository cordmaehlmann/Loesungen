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

// Programmstart
$liste = [];
$liste[] = rand(1, 20);
while (count($liste) < 9) {
    $inp = rand(1, 20);
    if (!in_array($inp, $liste)) {
        $liste[] = $inp;
        $liste[] = $inp;
    }
}
shuffle($liste);


$count = array_count_values($liste);

foreach ($count as $c => $v) {
    if ($v == 1) {
        echo "Die Zahl $c ist $v mal vorhanden";
    }
}

