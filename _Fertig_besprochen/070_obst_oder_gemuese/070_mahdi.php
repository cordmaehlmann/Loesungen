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


$list = ['Apfel', 'Birne', 'Kartoffel', 'Karotte', 'Banane'];
$zufall = rand(0, 4);
$wahl = $list[$zufall];

switch ($wahl){
    case 'Apfel':
    case 'Birne':
    case 'Banane':
        echo "$wahl ist ein Obst.";
        break;

    case 'Kartoffel':
    case 'Karotte':
        echo "$wahl ist ein Gemüse.";
        break;
}