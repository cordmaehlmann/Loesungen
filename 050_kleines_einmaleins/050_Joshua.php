<?php

# Kleines Einmaleins

echo "Schreibe ein Programm,<br>";
echo "welches das kleine Einmaleins formatiert ausgibt:<br>";

echo "<br><br>";

echo "001 002 003 004 005 006 007 008 009 010<br>";
echo "002 004 006 008 010 012 014 016 018 020<br>";
echo "003 006 009 012 015 018 021 024 027 030<br>";
echo "004 008 012 016 020 024 028 032 036 040<br>";
echo "005 010 015 020 025 030 035 040 045 050<br>";
echo "006 012 018 024 030 036 042 048 054 060<br>";
echo "007 014 021 028 035 042 049 056 063 070<br>";
echo "008 016 024 032 040 048 056 064 072 080<br>";
echo "009 018 027 036 045 054 063 072 081 090<br>";
echo "010 020 030 040 050 060 070 080 090 100<br>";

echo "<br><br>";

echo "Färbe jede 2. Zeile silber ein.<br>";
echo "Benutze für die Ausgabe eine HTML-Tabelle.<br>";

echo "<br><br>";

header("Content-Type: text/html; charset=utf-8");

// Funktion für führende Nullen
function format3($zahl) {
    if ($zahl < 10) return "00" . $zahl;
    if ($zahl < 100) return "0" . $zahl;
    return $zahl;
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Kleines Einmaleins</title>
    <style>
        table { border-collapse: collapse;
            font-family: Agency FB, Serif, serif; margin-top: 20px; }
        td {
            border: 2px solid black;
            font-weight: bold;
            padding: 10px;
            text-align: center;
            vertical-align: middle;
            width: 50px;
            height: 40px;
        }
        .label {
            font-weight: bold;
            background-color: #f0f0f0;
            text-align: center;
            width: 70px;
        }
        tr:nth-child(even) { background-color: silver; }
    </style>
</head>
<body>

<h3>Kleines Einmaleins (automatisch generiert)</h3>

<table>
    <?php for ($reihe = 1; $reihe <= 10; $reihe++): ?>
        <tr>
            <td class="label"><?= $reihe ?>er:</td>
            <?php for ($spalte = 1; $spalte <= 10; $spalte++): ?>
                <td><?= format3($reihe * $spalte) ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>
