<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Teilersumme</title>
    <style>
        div {
            border: orangered 2px dotted;
            padding: 8px;
            width: 850px;
        }
    </style>
</head>
<body>
<title>Teilersumme</title>

<h2>Schreibe eine Funktion, die überprüft, ob bei einer Zahl<br>
    die Summe aller Teiler kleiner als die Zahl ist.<br>
    Die Zahl selber soll hierbei nicht zu den Teilern zählen.</h2>

<?php
echo "<div>";

// ==========================
// FUNKTION: Teilersumme prüfen + zurückgeben
// ==========================
function dividerSumLessThan($n) {
    $sum = 0;
    $divider = [];

    for ($i = 1; $i <= $n/2; $i++) {
        if ($n % $i == 0) {                 // Modulo: Ist $i ein Teiler von $n?
            $sum += $i;
            $divider[] = $i;                // Speichern in Array für Ausgabe
        }
    }

    return [
        'zahl'   => $n,
        'summe'  => $sum,
        'teiler' => $divider,
        'kleiner'=> $sum < $n
    ];
}

// ==========================
// FORMULAR zur Eingabe
// ==========================

?>
<form method="post">                                <!-- HTML-Eingabe, nicht sichtbar in URL wegen POST (Ggs zu GET) -->
    Zahl eingeben:
    <input type="number" name="zahl" required>      <!-- leeres Feld -->

    <input type="submit" value="Prüfen">            <!-- Absendebutton -->
</form>
<br>

<?php

// ==========================
// VERARBEITUNG der Eingabe
// ==========================

if (isset($_POST['zahl'])) {                        // Wenn es im Array $_POST einen Wert für zahl gibt, dann
    $z = (int)$_POST['zahl'];                       // weise sie als Integer $z zu.
    $result = dividerSumLessThan($z);               // Funktion aufrufen und die Zahl $z dem Ergebnis $result zuweisen.

    echo "Zahl: {$result['zahl']}<br>";             // Ausgabe der eingegebenen Zahl
    echo "Teiler: " . implode(" + ", $result['teiler'])    // kürzt das Array der Teiler aus Result mittels "+"
        . " = " . "{$result['summe']}<br>";                         // und hängt mittels "=" die TeilerSumme an.
    echo "<br>";
    echo "Vergleich: {$result['summe']} "           // vergleicht, ob die Summe der Teiler
        . ($result['kleiner'] ? "<" : ">=")         // ternärer Operator: Ist das Resultat entweder "<" oder ">=" als
        . " {$result['zahl']} → "                   // die eingegebene Zahl
        . ($result['kleiner'] ? "TRUE" : "FALSE")   // Check, ob TRUE oder FALSE
        . "<br><br>";
}

echo "</div>";
?>
</body>
</html>
<!--
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

-->
