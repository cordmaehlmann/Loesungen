<?php

# Teilbar
echo "Schreibe ein Skript, das alle Zahlen von 1 bis 100 ausgibt,<br>";
echo "die durch drei teilbar sind.<br>";
echo "Hilfsmittel:<br>";
echo "Schleife, if, Modulo<br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {   // wenn i durch 3 teilbar ist
        echo $i . " ";
    }
}

echo "<br><br>";

echo "Zusatz 1:<br>";
echo "Gib die Anzahl der Zahlen aus:";

$anzahl = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        # echo $i . " ";
        $anzahl++;  // Zähler um 1 erhöhen
    }
}
echo "<br>Anzahl: " . $anzahl;

echo "<br><br>";

echo "Zusatz 2: Das Programm soll nun alle Zahlen ausgeben,<br>";
echo "die durch 3 ODER 7 teilbar sind:<br>";

# $anzahl = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 || $i % 7 == 0) {   // durch 3 ODER 7 teilbar
        echo $i . " ";
        # $anzahl++;
    }
}

# echo "<br>Anzahl: " . $anzahl;


