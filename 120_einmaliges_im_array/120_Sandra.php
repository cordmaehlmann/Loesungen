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

// Das Array, das die vier doppelten und eine einmalige Zahl enthält
$filledarray = [1, 3, 6, 1, 3, 6, 9, 2, 2]; // 9 Elemente, wie gefordert

// Zähle die Häufigkeit jeder Zahl im Array
$haeufigkeiten = array_count_values($filledarray);

// Durchlaufe das Häufigkeits-Array
foreach ($haeufigkeiten as $zahl => $anzahl) {
    // Wenn die Häufigkeit (Anzahl) einer Zahl genau 1 ist,
    // dann ist das unsere einmalige Zahl.
    if ($anzahl === 1) {
        echo 'Das ist die einmalige Zahl: ' . $zahl . '<br>';
        break; // Wir haben die Zahl gefunden, also die Schleife beenden
    }
}
echo 'Das waren die Zahlen im gesamten: ';
foreach ($filledarray as $a) {
    echo $a . ' ';
}
