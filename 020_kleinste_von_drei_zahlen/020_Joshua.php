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

print "Zahlen: $zahl1, $zahl2, $zahl3<br>";

$kleinste = $zahl1;

if ($zahl2 < $kleinste) {
    $kleinste = $zahl2;
}
if ($zahl3 < $kleinste) {
    $kleinste = $zahl3;
}

print "Die kleinste Zahl ist: $kleinste";
