<?php

/*
 * Teilersumme
 *
 * Schreibe eine Funktion, die überprüft, ob bei einer Zahl
 * die Summe aller Teiler kleiner als die Zahl ist.
 * Die Zahl selber soll hierbei nicht zu den Teilern zählen.
 *
 * Bei 81 würde TRUE zurückgegeben werden, da
 * 1 + 3 + 9 + 27 = 40
 * und 40 < 81
 *
 * Bei 80 würde FALSE zurückgegeben werden, da
 * 1 + 2 + 4 + 5 + 8 + 10 + 16 + 20 + 40 = 106
 * und 106 > 80
 */

$zahlIn = rand(1, 100);
echo $zahlIn;
echo "<br>";

function dividerSum($input)
{
    $sum = 0;
    for ($i = 1; $i < $input; $i++) {   
        if ($input % $i == 0) {
            $sum += $i;
        }
    }
    echo $sum;
    echo "<br>";
    if ($sum < $input) {
        echo 'true';
    } else {
        echo 'false';
    }
    echo "<br>";

}
dividerSum($zahlIn);
dividerSum(80);
dividerSum(81);