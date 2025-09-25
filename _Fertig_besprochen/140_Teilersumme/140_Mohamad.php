<?php

/*
 * Teilersumme
 *
 * Schreibe eine Funktion, die überprüft, ob bei einer Zahl
 * die Summe aller Teiler kleiner als die Zahl ist.
 * Die Zahl selber soll hierbei nicht zu den Teilern zählen.
 *
 * Bei 81 würde TRUE zurück gegeben werden, da
 * 1 + 3 + 9 + 27 = 40
 * und 40 < 81
 *
 * Bei 80 würde FALSE zurück gegeben werden, da
 * 1 + 2 + 4 + 5 + 8 + 10 + 16 + 20 + 40 = 106
 * und 106 > 80
 */


function istTeilersummeKleiner($zahl) {
    $summe = 0;  

  
    for ($i = 1; $i <= $zahl / 2; $i++) {
        if ($zahl % $i == 0) {   
            $summe = $summe + $i;  
        }
    }

   
    if ($summe < $zahl) {
        return true;   
    } else {
        return false; 
    }
}
var_dump(istTeilersummeKleiner(81));
var_dump(istTeilersummeKleiner(80));
?>
