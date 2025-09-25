<?php

/*
 * Kleinste von drei Zahlen
 * 
 * Schreibe ein Programm, 
 * das drei Variablen mit zufälligen Zahlen befüllt.
 * Dann soll das Programm testen,
 * welcher Zahlenwert der kleinste ist und diesen ausgeben.
 *
 * Hilfsmittel: rand(), if-elseif-else
 */

$zahl1 = rand(1, 100);
$zahl2 = rand(1, 100);
$zahl3 = rand(1, 100);


echo "zahl 1 : " . $zahl1 . "\n";
echo "zahl 2 : " . $zahl2 . "\n";
echo "zahl 3 : " . $zahl3 . "\n";

if ($zahl1 <= $zahl2 && $zahl1 <= $zahl3) {
    echo "Die kleinste Zahl ist $zahl1\n";
} elseif ($zahl2 <= $zahl1 && $zahl2 <= $zahl3) {
    echo "Die kleinste Zahl ist: $zahl2\n";
} else  {
    echo "Die kleinste Zahl ist:$zahl3\n";
}












