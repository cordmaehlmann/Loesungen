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


$age = rand(10, 75);
$handicap = rand(10, 100);
$yearsInFirm = rand(10, 30);

$baseVac = 26;

$junior = 4; // +
$senior = 2;  // +
$handicapBonus = 5;  // +
$veteran = 2; // +

$vacTime= 0;


if ($age >= 18) {
        $vacTime = $baseVac;
        if ($age >= 55){
            $vacTime = $baseVac + $veteran;
        }

}elseif ($age < 18) {
    $vacTime = $baseVac + $junior;

}

if ($yearsInFirm >= 10) {
    $vacTime = $vacTime + $senior;
    if($age <= 25){
        $vacTime = $baseVac;
        echo "Ungültige Eingabe für Jahre im Betrieb! ";
        echo "<br>";
    }
}

if ($handicap >= 50) {
    $vacTime = $vacTime + $handicapBonus;
}

echo 'Alter: ' . $age . "<br>" . 'Jahre im Betrieb: ' . $yearsInFirm . "<br>" . 'Behinderung in %: ' . $handicap . "<br>" .  'Urlaubsanspruch: ' . $vacTime;