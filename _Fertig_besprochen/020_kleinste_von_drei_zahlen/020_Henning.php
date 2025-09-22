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

$zahl1 = rand(1,6);
$zahl2 = rand(1,6);
$zahl3 = rand(1,6);

$zahl1 = 2;
$zahl2 = 2;
$zahl3 = 3;

print "Zahl1 = $zahl1";
print "\n";
print "Zahl2 = $zahl2";
print "\n";
print "Zahl3 = $zahl3";
print "\n";

if ($zahl1 < $zahl2 && $zahl1 < $zahl3) {
    print 'Zahl 1 ist die kleinste Zahl';
} elseif ($zahl2 < $zahl3 && $zahl2 < $zahl1) {
    print 'Zahl 2 ist die kleinste Zahl';
} elseif ($zahl3 < $zahl2 && $zahl3 < $zahl1) {
    print 'Zahl 3 ist die kleinste Zahl';
}else {
    print 'Wir haben ein Unentschieden!';
}
