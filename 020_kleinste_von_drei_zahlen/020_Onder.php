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

<<<<<<< HEAD
$zahl1 = rand(1, 100);
print "Zahl 1: " . $zahl1 . "\n";
$zahl2 = rand(1, 100);
print "Zahl 2: " . $zahl2 . "\n";
$zahl3 = rand(1, 100);
=======
$zahl1 = rand(1, 3);
print "Zahl 1: " . $zahl1 . "\n";
$zahl2 = rand(1, 3);
print "Zahl 2: " . $zahl2 . "\n";
$zahl3 = rand(1, 3);
>>>>>>> f5a3787fb3c455333994b90e89ab8f224b967066
print "Zahl 3: " . $zahl3 . "\n";

if ($zahl1 < $zahl2 and $zahl3) {
    echo $zahl1 . " ist die kleinste Zahl von drei Zahlen";
}elseif ($zahl2 < $zahl3 and $zahl1) {
    echo $zahl2 . " ist die kleinste Zahl von drei Zahlen";
}elseif ($zahl3 < $zahl1 and $zahl2) {
    echo $zahl3 . " ist die kleinste Zahl von drei Zahlen";
<<<<<<< HEAD
}
=======
}
>>>>>>> f5a3787fb3c455333994b90e89ab8f224b967066
