<<<<<<< HEAD
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

$zahl1= rand(1,10);
$zahl2= rand(1,10);
$zahl3= rand(1,10);

if ($zahl1 <= $zahl2 && $zahl1 <= $zahl3) {
    print "Von " . $zahl1 . ", " . $zahl2 . ", " . $zahl3. " ist " . $zahl1 . " die kleinste Zahl!";

    }

elseif ($zahl2 <= $zahl1 && $zahl2 <= $zahl3) {
    print "Von " . $zahl1 . ", " . $zahl2 . ", " . $zahl3. " ist " . $zahl2 . " die kleinste Zahl!";

   } else {
    print "Von " . $zahl1 . ", " . $zahl2 . ", " . $zahl3. " ist " . $zahl3 . " die kleinste Zahl!";
}

=======
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

$zahl1= rand(1,10);
$zahl2= rand(1,10);
$zahl3= rand(1,10);

if ($zahl1 <= $zahl2 && $zahl1 <= $zahl3) {
    print "Von " . $zahl1 . ", " . $zahl2 . ", " . $zahl3. " ist " . $zahl1 . " die kleinste Zahl!";

    }

elseif ($zahl2 <= $zahl1 && $zahl2 <= $zahl3) {
    print "Von " . $zahl1 . ", " . $zahl2 . ", " . $zahl3. " ist " . $zahl2 . " die kleinste Zahl!";

   } else {
    print "Von " . $zahl1 . ", " . $zahl2 . ", " . $zahl3. " ist " . $zahl3 . " die kleinste Zahl!";
}



>>>>>>> f5a3787fb3c455333994b90e89ab8f224b967066
