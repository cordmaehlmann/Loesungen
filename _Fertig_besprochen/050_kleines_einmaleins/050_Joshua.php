<?php

/*
* Kleines Einmaleins
*
* Schreibe ein Programm,
* welches das kleine Einmaleins formatiert ausgibt:
*
* 001 002 003 004 005 006 007 008 009 010
* 002 004 006 008 010 012 014 016 018 020
* 003 006 009 012 015 018 021 024 027 030
* 004 008 012 016 020 024 028 032 036 040
* 005 010 015 020 025 030 035 040 045 050
* 006 012 018 024 030 036 042 048 054 060
* 007 014 021 028 035 042 049 056 063 070
* 008 016 024 032 040 048 056 064 072 080
* 009 018 027 036 045 054 063 072 081 090
* 010 020 030 040 050 060 070 080 090 100
*
* Zusatz 1: Färbe jede 2. Zeile silber ein.
*
* Zusatz 2: Benutze für die Ausgabe eine HTML-Tabelle.
*/


header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kleines Einmaleins</title>
    <style>
        table { border-collapse: collapse; font-family: monospace; }
        td { border: 1px solid black; padding: 5px; text-align: center; }
        tr:nth-child(even) { background-color: silver; }
    </style>
</head>
<body>

<table>
    <?php for ($reihe = 1; $reihe <= 10; $reihe++): ?>
        <tr>
            <?php for ($spalte = 1; $spalte <= 10; $spalte++): ?>
                <td><?= $reihe * $spalte ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>

