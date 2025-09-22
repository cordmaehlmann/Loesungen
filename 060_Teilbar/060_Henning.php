<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>060_teilbar</title>
    <style>
        div {
            border: orangered 2px dotted;
            padding: 8px;
            width: 850px;
        }
    </style>
</head>
<body>
<title>Teilbar</title>

<h2>Schreibe ein Skript, das alle Zahlen von 1 bis 100 ausgibt,<br> die durch drei teilbar sind.</h2>


<?php

echo "<div>";                       // Ausgabe der HTML-Bedingungen aus <style><div>
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 != 0) continue;      // Modulo; überspringe alle, die nicht durch 3 teilbar sind
    echo $i . ' ';                  // 3 6 9 12 15 18 21 24 27 30 33 36 39 42 45 48 51 54 57 60 63 66 69 72 75 78 81 84 87 90 93 96 99
};
echo "</div><br>";                  // Ausgabe HTML beenden und Zeilenumbruch
?>

<h3>Zusatz 1: Gibt die Anzahl der Zahlen aus.</h3>

<?php
echo "<div>";
$sumIIIer = [];                                 // Array anlegen

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 != 0) continue;                  // Modulo
    $sumIIIer[] = $i;                           // Sammle alle 3er-Teile im Array
};

echo "Die Anzahl der Zahlen beträgt: " . count($sumIIIer);      // 33
echo "</div><br>";
?>

<h3>Zusatz 2: Das Programm soll nun alle Zahlen ausgeben, die durch 3 ODER 7 teilbar sind.</h3>

<?php
echo "<div>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 != 0 && $i % 7 != 0) continue;
    echo "\n";
    echo $i . ' ';
};
echo "</div><br>";
?>

</body>
</html>

