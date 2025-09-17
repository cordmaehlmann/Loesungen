<?php
/*
* Würfeln
*
* Würfel eine Zahl (von 1 bis 6) und gib aus,
* was gewürfelt wurde:
* Super, eine 6!
* Immerhin noch eine 5!
* Das reicht nicht! (bei 1-4)
*
* Hilfsmittel: rand(), Verzweigung
*/


$zahlRand = rand(1, 6);

if ($zahlRand == 6) {
    print "Ergebnis:" . $zahlRand .  " Super, eine 6!";
} elseif ($zahlRand == 5) {
    print "Ergebnis:" . $zahlRand .  " Immerhin noch eine 5!";
} else {
    print "Ergebnis:" . $zahlRand .  " Das reicht nicht!";
}