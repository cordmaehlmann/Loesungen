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

$food1 = 'Obst';
$food2 = 'Gemüse';

$foods = ['Apfel','Birne','Kartoffel','Karotte','Banane'];

$selection = $foods[array_rand($foods)];

if ($selection == 'Kartoffel' || $selection == 'Karotte') {
    echo 'Der ausgewählte Artikel: ' . $selection . ' ist ' . $food2 . '.';
} else {
    echo 'Der ausgewählte Artikel: ' . $selection . ' ist ' . $food1 . '.';
}

echo "\n";

$selection = $foods[array_rand($foods)];
$category = ''; // Variable für Obst oder Gemüse

switch ($selection) {
    case 'Apfel':
    case 'Birne':
    case 'Banane':
        $category = $food1;
        break;

    case 'Kartoffel':
    case 'Karotte':
        $category = $food2;
        break;
}

echo "Der ausgewählte Artikel: $selection ist $category.";