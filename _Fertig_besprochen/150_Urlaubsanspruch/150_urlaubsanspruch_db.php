<?php

/*
 * Urlaubsanspruch
 *
 * Für die Bestimmung des Urlaubsanspruchs der Beschäftigten einer Firma
 * soll ein Programm entwickelt werden.
 * Die Grundlage für die Berechnung des Urlaubsanspruchs
 * bildet die Betriebsvereinbarung.
 * Das Programm soll die Anzahl der Urlaubstage für
 * jeweils einen Beschäftigten berechnen.

 * Betriebsvereinbarung:
 * Allen Beschäftigten stehen 26 Tage Urlaub zu.
 * Minderjährige Beschäftigte erhalten 30 Tage Urlaub.
 * Beschäftigte, die älter als 55 Jahre sind, erhalten 28 Tage Urlaub.
 * Beschäftigte mit einer Behinderung ab 50 % erhalten
 * zusätzlich 5 weitere Tage Urlaub.
 * Beschäftigte mit einer Betriebszugehörigkeit von mehr als 10 Jahren
 * erhalten 2 zusätzliche Tage Urlaub.
 */

//Funktionen
function calc($age, $time, $grade) {
    $urlaub = 26;
    if ($age <= 17) {
        $urlaub = 30;
    }
    elseif ($age >= 56) {
        $urlaub = 28;
    }
    if ($grade >= 50) {
        $urlaub += 5;
    }
    if ($time >= 10) {
        $urlaub += 2;
    }

    echo "Du hast $urlaub Tage Urlaub.";
}

// Hauptprogramm

echo "Urlaubsanspruch berechnen\n";

echo "Gib dein Alter ein(ganze Zahl): ";
$age = readline("");
$age = (int)$age;
echo "\n";

echo "Betriebszugehörigkeit in ganzen Jahren: ";
$time = readline("");
$time = (int)$time;
echo "\n";

echo "Liegt ein Behinderungsgrad vor?(ganze Zahl): ";
$grade = readline("");
$grade = (int)$grade;
echo "\n";

calc($age, $time, $grade);
