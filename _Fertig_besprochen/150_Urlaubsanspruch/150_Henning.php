<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Urlaubsanspruch</title>
    <style>
        div {
            border: orangered 2px dotted;
            padding: 8px;
            width: 800px;
        }
    </style>
</head>
<body>
<title>Urlaubsanspruch</title>

<h2>Berechnung des Urlaubsanspruchs:<br></h2>
    <h3>Alle haben: 26 Tage<br>
    < 18 Jahre: +4 Tage<br>
    > 55 Jahre: +2 Tage<br>
    GdB >= 50: +5 Tage<br>
    BZ > 10 Jr: +2 Tage<br></h3>

<?php
echo "<div>";

// ==========================
// FUNKTION: Urlaubsanspruch berechnen
// ==========================

function calcVacation($age, $dsblt, $emplymt) {     // Kalkuliere die variablen Anteile zum
    $vacDays = 26;                                  // Grundanspruch, daher fix
    if ($age < 18) {
        $vacDays += 4;
    }
    if ($age > 55) {
        $vacDays += 2;
    }
    if ($dsblt >= 50) {
        $vacDays += 5;
    }
    if ($emplymt > 10) {
        $vacDays += 2;
    }

    return [
        'age'       => $age,
        'dsblt'     => $dsblt,
        'emplymt'   => $emplymt,
        'vacDays'   => $vacDays
    ];
}
// ==========================
// FORMULAR zur Eingabe
// ==========================

?>
<form method="post">

    Alter:                  <br><input type="number" name="age" required><br>
    GdB in %:               <br><input type="number" name="dsblt" value="0"><br>
    Betriebszughörigkeit:   <br><input type="number" name="emplymt" value="0"><br><br>

    <input type="submit" value="Urlaubsanspruch berechnen">

<?php
// ==========================
// VERARBEITUNG zur Eingabe
// ==========================
if (isset($_POST['age'], $_POST['dsblt'], $_POST['emplymt'])) {
    $age        = (int)$_POST['age'];
    $dsblt      = (int)$_POST['dsblt'];
    $emplymt    = (int)$_POST['emplymt'];

    $result = calcVacation($age, $dsblt, $emplymt);
}
// ==========================
// AUSGABE
// ==========================

echo "<br>In Deinem Alter von {$result['age']}, "
        . "Deiner Einschränkung von {$result['dsblt']} % und "
        . "Deiner Betriebszugehörigkeit von {$result['emplymt']} Jahren <br><br>(Vielen Dank dafür!)<br><hr>"
        . "<p style='text-align: center;'>stehen Dir in diesem Jahr {$result['vacDays']} Urlaubstage zur Verfügung!</p><hr>"
        . "Genieße Deinen Urlaub!"
        . "<br><br>";

echo "</div>";
?>
</body>
</html>
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

