<?php

# Obst oder Gemüse

echo "Fülle EIN (nummerisches, eindimensionales) Array<br>";
echo "mit Apfel, Birne, Kartoffel, Karotte und Banane.<br>";
echo "Lies per Zufall ein Element des Arrays aus<br>";
echo "und gib an, ob es sich um Obst oder Gemüse handelt.<br>";
echo "Hilfsmittel:<br>";
echo "array, rand(), switch-case:<br>";

// Array mit Obst und Gemüse
$lebensmittel = ["Apfel", "Birne", "Kartoffel", "Karotte", "Banane"];

// Zufälliges Element auswählen
$zufall = $lebensmittel[rand(0, count($lebensmittel) - 1)];

// Mit switch-case prüfen
switch ($zufall) {
    case "Apfel":
    case "Birne":
    case "Banane":
        echo "$zufall ist Obst";
        break;

    case "Kartoffel":
    case "Karotte":
        echo "$zufall ist Gemüse";
        break;
}

echo "<br><br>";

echo "Zusatz 1: Die Reihenfolge im Array soll beliebig veränderbar sein<br>";

$lebensmittel = ["Apfel", "Birne", "Kartoffel", "Karotte", "Banane"];

// Array zufällig durchmischen
shuffle($lebensmittel);

// Zufallselement auswählen
$zufall = $lebensmittel[rand(0, count($lebensmittel) - 1)];

switch ($zufall) {
    case "Apfel":
    case "Birne":
    case "Banane":
        echo "$zufall ist Obst";
        break;

    case "Kartoffel":
    case "Karotte":
        echo "$zufall ist Gemüse";
        break;
}

echo "<br><br>";

echo "Zusatz 2: Die Wörter Obst & Gemüse sollen im Quellcode<br>";
echo "          nur je einmal benutzen.<br>";
echo "          Wenn die beiden Wörter in einer Variablen gespeichert werden,<br>";
echo "          darf auch diese nur an einer Stelle ausgegeben oder zugewiesen werden.<br>";

$lebensmittel = ["Apfel", "Birne", "Kartoffel", "Karotte", "Banane"];

// Array durchmischen
shuffle($lebensmittel);

// Zufallselement auswählen
$zufall = $lebensmittel[rand(0, count($lebensmittel) - 1)];

// Wörter nur einmal definiert
$obst = "Obst";
$gemuese = "Gemüse";

switch ($zufall) {
    case "Apfel":
    case "Birne":
    case "Banane":
        echo "$zufall ist $obst";
        break;

    case "Kartoffel":
    case "Karotte":
        echo "$zufall ist $gemuese";
        break;
}