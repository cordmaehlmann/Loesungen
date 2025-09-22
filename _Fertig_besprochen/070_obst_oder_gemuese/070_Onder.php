<?php
/*
 * Obst oder Gemüse
 *
 * Fülle EIN (nummerisches, eindimensionales) Array
 * mit Apfel, Birne, Kartoffel, Karotte und Banane.
 * Lies per Zufall ein Element des Arrays aus
 * und gib an, ob es sich um Obst oder Gemüse handelt.
 *
 * Hilfsmittel: array, rand(), switch-case
 *
 * Zusatz 1: Die Reihenfolge im Array soll beliebig veränderbar sein
 * Zusatz 2: Die Wörter Obst & Gemüse sollen im Quellcode
 *           nur je einmal benutzen.
 *           Wenn die beiden Wörter in einer Variablen gespeichert werden,
 *           darf auch diese nur an einer Stelle ausgegeben oder zugewiesen werden.
 */

$meinList =[
    "a"=>"Apfel",
    "b"=>"Birne",
    "c"=>"Kartoffel",
    "d"=>"Karotte",
    "e"=>"Banane"];
$meinKeys =["a","b","c","d","e"];
$meinList1 = ["Obst","Gemüse"];

switch ($meinKeys[array_rand($meinKeys,)]) {
    case "a":
        echo $meinList["a"]." ist ein ". $meinList1[0];
        break;
    case "b":
        echo $meinList1["b"] . " ist ein ". $meinList1[0];
        break;
    case "c":
        echo $meinList["c"] . " ist eine ". $meinList1[1];
        break;
    case "d":
        echo $meinList["d"] . " ist eine ". $meinList1[1];
        break;
    case "e":
        echo $meinList["e"] . " ist ein ". $meinList1[0];
        break;
    default:
        echo "Falscher Wert";
}

