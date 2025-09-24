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


function berechneUrlaub(int $alter, int $behinderung, int $betriebszugehoerigkeit): int
{
    // Basisurlaub
    if ($alter < 18) {
        $urlaub = 30;
    } elseif ($alter > 55) {
        $urlaub = 28;
    } else {
        $urlaub = 26;
    }

    // Zusatzvereinbarung für Angestellte mit Behinderung >= 50%
    if ($behinderung >= 50) {
        $urlaub += 5;
    }

    // Zusatzvereinbarung für Angestellte mit einer Betriebszugehörigkeit > 10 Jahre
    if ($betriebszugehoerigkeit > 10) {
        $urlaub += 2;
    }

    return $urlaub;
}

// Ausgabe
echo "Urlaub für 17 Jahre, keine Behinderung, 2 Jahre Betriebszugehörigkeit: " . berechneUrlaub(17, 0, 2) . " Tage\n"; // 30
echo "Urlaub für 60 Jahre, 50% Behinderung, 12 Jahre Betriebszugehörigkeit: " . berechneUrlaub(60, 50, 12) . " Tage\n"; // 35
echo "Urlaub für 40 Jahre, 0% Behinderung, 15 Jahre Betriebszugehörigkeit: " . berechneUrlaub(40, 0, 15) . " Tage\n"; // 28
echo "Urlaub für 40 Jahre, 0% Behinderung, 15 Jahre Betriebszugehörigkeit: " . berechneUrlaub(45, 10, 5) . " Tage\n"; // 26
echo "Urlaub für 40 Jahre, 0% Behinderung, 15 Jahre Betriebszugehörigkeit: " . berechneUrlaub(52, 30, 22) . " Tage\n"; // 28