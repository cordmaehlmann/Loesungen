<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kleines Einmaleins</title>
    <style>
        table {
            border: 2px solid orangered;    /* Alle drei Werte in einem.*/
            border-collapse: collapse;      /* Die doppelten Linien entfernen. */
        }

        th, td {
            border: 2px solid orangered;    /* Zellränder */
            padding: 2px;                   /* Innenrand */
            text-align: center;             /* Zahlen mittig */
        }

        .silver {
            background-color: silver;
        }
    </style>
</head>
<body>
<h1>Kleines Einmaleins</h1>

<p>
    <br>
    * Schreibe ein Programm,<br>
    * welches das kleine Einmaleins formatiert ausgibt:<br>
    <br>
    * 001 002 003 004 005 006 007 008 009 010<br>
    * 002 004 006 008 010 012 014 016 018 020<br>
    * 003 006 009 012 015 018 021 024 027 030<br>
    * 004 008 012 016 020 024 028 032 036 040<br>
    * 005 010 015 020 025 030 035 040 045 050<br>
    * 006 012 018 024 030 036 042 048 054 060<br>
    * 007 014 021 028 035 042 049 056 063 070<br>
    * 008 016 024 032 040 048 056 064 072 080<br>
    * 009 018 027 036 045 054 063 072 081 090<br>
    * 010 020 030 040 050 060 070 080 090 100<br>
    <br>
    * Zusatz 1: Färbe jede 2. Zeile silber ein.<br>
    <br>
    * Zusatz 2: Benutze für die Ausgabe eine HTML-Tabelle.<br>
    <br>
</p>

<table>
    <?php
    // Äußere Schleife: Zeilen (faktor1)
    for ($faktor1 = 1; $faktor1 <= 10; $faktor1++) {            // Zeilen
        $farbklasse = "";                                       // Standard-HTML Klasse farblos
        if ($faktor1 % 2 == 0) {                                // Wenn Ergebnis gerade, dann
            $farbklasse = "silver";                             // einfärben in Silber
        }

        echo "<tr class='$farbklasse'>";                        // Ausgabe table-row-tag

        // Innere Schleife: Spalten (faktor2)
        for ($faktor2 = 1; $faktor2 <= 10; $faktor2++) {        // Spalten
            // formatierter Print: 3-stellige Zahl in TabellenDatenzelle <td>
            printf("<td>%03d</td>", $faktor1 * $faktor2);   // Formatierung & Berechnung
        }

        echo "</tr>";
    }
    ?>
</table>
</body>
</html>



