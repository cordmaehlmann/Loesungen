<?php
# Zahlenreihen

echo "Schreibe eine for-Schleife, die Folgendes ausgibt:</br>";
echo "1 2 3 4 5:</br>";
for ($i = 1; $i <= 5; $i++) {
echo $i . " ";
}

echo "<br><br>";

echo "Schreibe eine for-Schleife, die Folgendes ausgibt:</br>";
echo "100 90 80 70 60 50 40 30 20 10:</br>";
for ($i = 100; $i >= 10; $i -= 10) {
echo $i . " ";
}

echo "<br><br>";

echo "Schreibe eine for-Schleife, die Folgendes ausgibt:</br>";
echo "2000 3000 4000 5000 6000:</br>";
for ($i = 2000; $i <= 6000; $i += 1000) {
echo $i . " ";
}

echo "<br><br>";

echo "Schreibe eine for-Schleife, die Folgendes ausgibt:</br>";
echo "2 1.5 1 0.5 0 -0.5 -1:</br>";
for ($i = 2; $i >= -1; $i -= 0.5) {
echo $i . " ";
}

echo "<br><br>";

echo "Schreibe eine for-Schleife, die Folgendes ausgibt:</br>";
echo "1 2.2 3.4 4.6 5.8 7 8.2 9.4:</br>";
for ($i = 0; $i < 8; $i++) {
    echo (1 + $i * 1.2) . " ";
}

echo "<br><br>";

echo "Schreibe eine for-Schleife, die Folgendes ausgibt:</br>";
echo "13 17 21 25 29:</br>";
for ($i = 13; $i <= 29; $i += 4) {
    echo $i . " ";
}

echo "<br><br>";

echo "Schreibe eine for-Schleife, die Folgendes ausgibt:</br>";
echo "Z5 Z7 Z9 Z11 Z13:</br>";
for ($i = 5; $i <= 13; $i += 2) {
    echo "Z" . $i . " ";
}

echo "<br><br>";

echo "Schreibe eine for-Schleife, die Folgendes ausgibt:</br>";
echo "a2b3 a12b13 a22b23:</br>";
for ($i = 2; $i <= 22; $i += 10) {
    echo "a" . $i . "b" . ($i+1) . " ";
}

echo "<br><br>";

echo "Schreibe EINE for-Schleife, die Folgendes ausgibt:</br>";
echo "1 2 3 4 5 6 8 9 10:</br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 7) continue;
    echo $i . " ";
}

echo "<br><br>";

echo "Schreibe EINE for-Schleife, die Folgendes ausgibt:</br>";
echo "13 17 21 29 33 37 45:</br>";

$val = 13;
for ($i = 0; $i < 7; $i++) {
    echo $val . " ";
    if ($i == 2) $val += 8; // Sprung von 21 auf 29
    else if ($i == 5) $val += 8; // Sprung von 37 auf 45
    else $val += 4;
}

echo "<br><br>";

echo "Schreibe ein Programm, das per for-Schleife</br>";
echo "alle Zahlen von 1 bis 20 addiert</br>";
echo "und danach das Endergebnis ausgibt.</br>";
$summe = 0;
for ($i = 1; $i <= 20; $i++) {
    $summe += $i;
}
echo $summe . " ";

echo "<br><br>";

echo "Schreibe EINE for-Schleife, die Folgendes ausgibt:</br>";
echo "1 2 3 4 5 4 3 2 1:</br>";
for ($i = 1; $i <= 9; $i++) {
    echo ($i <= 5 ? $i : 10 - $i) . " ";
}

echo "<br><br>";

echo "Schreibe ein Programm, das mit EINER for-Schleife</br>";
echo "alle natürlichen Zahlen von 1 bis 39 sowie 61 bis 100</br>";
echo "(jeweils einschließlich) der Größe nach ausgibt.</br>";
echo "1 2 3 4 ..... 36 37 38 39 61 62 63 64 ... 97 98 99 100:</br>";
for ($i = 1; $i <= 100; $i++) {
if ($i >= 40 && $i <= 60) continue;
echo $i . " ";
}
