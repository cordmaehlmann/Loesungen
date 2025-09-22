<?php

# Lottoziehung

echo "Schreibe ein Programm, das sechs verschiedene<br>";
echo "Lottozahlen (6 aus 49) zieht und ausgibt.<br>";
echo "Hilfsmittel: Array, Schleife/Verzweigung, in_array()<br>";

// Array mit Zahlen von 1 bis 49
$zahlen = range(1, 49);

// Array zufällig mischen
shuffle($zahlen);

// Die ersten 6 Zahlen nehmen
$lottozahlen = array_slice($zahlen, 0, 6);

// Sortieren für bessere Lesbarkeit
# sort($lottozahlen);

// Ausgabe
echo "Gezogene Lottozahlen:<br>";
foreach ($lottozahlen as $z) {
    echo $z . " ";
}