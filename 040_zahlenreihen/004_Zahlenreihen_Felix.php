<?php

/* * * Zahlenreihen ** */

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5
*/
for ($i = 1; $i < 6; $i++) {
    if ($i == 6) break;
    echo $i . ' ';
}
print '<br>';
/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 100 90 80 70 60 50 40 30 20 10
*/

for ($i = 100; $i > 0; $i -= 10){
    if ($i < 10) break;
    echo $i . ' ';
}
print '<br>';
/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 2000 3000 4000 5000 6000
*/
for ($i = 2000; $i < 7000; $i += 1000){
    if ($i == 7000) break;
    echo $i . ' ';
}
print '<br>';
/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 2 1.5 1 0.5 0 -0.5 -1
*/
for ($i = 2; $i >= -1; $i -= 0.5){
    if ($i < -1) break;
    echo $i . ' ';
}
print '<br>';
/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 1 2.2 3.4 4.6 5.8 7 8.2 9.4
*/
for ($i = 1; $i < 10; $i += 1.2){
    if ($i > 10) break;
    echo $i . ' ';
}
print '<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 13 17 21 25 29
*/
for ($i = 13; $i < 30; $i += 4){
    if ($i > 30) break;
    echo $i . ' ';
}
print '<br>';
/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* Z5 Z7 Z9 Z11 Z13
*/
for ($i = 5; $i < 14; $i += 2) {
    echo 'Z' . $i . ' ';
}
print '<br>';
/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* a2b3 a12b13 a22b23
*/
echo 'a2b3';
echo ' ';
for ($i = 1; $i <= 2; $i++){
    echo 'a' . $i . '2b' . $i . '3' . ' ';
}
print '<br>';
/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5 6 8 9 10
*/
for ($i = 1; $i <= 10; $i++) {
    if ($i == 7) continue;
    echo $i . ' ';
}
print '<br>';
/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 13 17 21 29 33 37 45
*/
for ($i = 13; $i < 46; $i += 4) {
    if ($i == 25 || $i == 41) continue;
    echo $i . ' ';
}
print '<br>';
/*
* Schreibe ein Programm, das per for-Schleife
* alle Zahlen von 1 bis 20 addiert
* und danach das Endergebnis ausgibt.
*/

$zahl = 0;
for ($i = 1; $i <= 20; $i++){
    $zahl += $i;

}
echo $zahl . ' ';
echo '<br>';
/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5 4 3 2 1
*/
for ($i = 1; $i <= 9; $i++) {
    if ($i <= 5) {
        echo $i . ' ';
    } else {
        echo (10 - $i) . ' ';
    }

}
echo '<br>';
/*
* Schreibe ein Programm, das mit EINER for-Schleife
* alle natürlichen Zahlen von 1 bis 39 sowie 61 bis 100
* (jeweils einschließlich) der Größe nach ausgibt.
* 1 2 3 4 ..... 36 37 38 39 61 62 63 64 ... 97 98 99 100
*/
for ($i = 1; $i <= 100; $i++) {
    if ($i > 39 && $i < 61) {
        continue;
    }
    echo $i . ' ';

}


