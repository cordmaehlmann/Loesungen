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

/* 26 Tage
  + 4 bei unter 18J
  + 2 bei über 55J
  + 5 bei 50% Behinderung
  +2 bei mehr als 10J im Betrieb
    Alter, Behinderung, Betriebszugehörigkeit
*/

?>

<!DOCTYPE html>
<html>
<head>
    <title>Urlaubsanspruch</title>
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input, button {
            margin: 5px;
            padding: 5px;
        }
        .ausgabe { background: #f0f0f0; padding: 10px; }
    </style>
</head>
<body>
    <h2>Urlaubsanspruch</h2>

    <form method="POST">
        Alter: <input type="number" name="alter" required><br>
        Behinderungsgrad (%): <input type="number" name="behinderung" required><br>
        Betriebszugehörigkeit (Jahre): <input type="number" name="betriebszugehoerigkeit" required><br>
        <button type="submit">Berechnen</button>
    </form>

    <?php
    if ($_POST) {
        $alter = intval($_POST['alter']);
        $behinderung = intval($_POST['behinderung']);
        $betriebszugehoerigkeit = intval($_POST['betriebszugehoerigkeit']);

        $urlaubstage = 26;

        if ($alter < 18) {
            $urlaubstage = 30;
        } elseif ($alter > 55) {
            $urlaubstage = 28;
        }

        if ($behinderung >= 50) {
            $urlaubstage += 5;
        }

        if ($betriebszugehoerigkeit > 10) {
            $urlaubstage += 2;
        }

        echo "<div class='ausgabe'>";
        echo "<h3>Ergebnis:</h3>";
        echo "Urlaubsanspruch: $urlaubstage Tage<br>";
        echo "Alter: $alter Jahre<br>";
        echo "Behinderungsgrad: $behinderung%<br>";
        echo "Betriebszugehörigkeit: $betriebszugehoerigkeit Jahre";
        echo "</div>";
    }
    ?>
</body>
</html>