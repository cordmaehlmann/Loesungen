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

$obst = ["Apfel", "Birne", "Banane"];
$gemuese = ["Kartoffel", "Karotte"];


$lebensmittel = array_merge($obst, $gemuese);


$zufaellig = array_rand($lebensmittel);
$ausgewaehlt = $lebensmittel[$zufaellig];

// Determine if the selected element is fruit or vegetable
if (in_array($ausgewaehlt, $obst)) {
    $art = "Obst";
} else {
    $art = "Gemüse";
}

// Output the result
echo "Du hast ein: " . $ausgewaehlt . " ausgewählt.<br>";
echo "Es ist ein " . $art . ".";


?>

