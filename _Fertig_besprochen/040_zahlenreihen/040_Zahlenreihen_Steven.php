<?php



/* * * Zahlenreihen ** */

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5
*/

for ($i = 1; $i <= 5; $i++) {
    echo $i . ' ';
} echo '<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 100 90 80 70 60 50 40 30 20 10
*/

for ($i = 100; $i >= 10;) {
    echo $i . ' ';
    $i -= 10;
} echo '<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 2000 3000 4000 5000 6000
*/

for ($i = 1000; $i <= 6000;) {
    echo $i . ' ';
    $i += 1000;
} echo '<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 2 1.5 1 0.5 0 -0.5 -1
*/

for ($i = 2; $i >= -1;) {
    echo $i . ' ';
    $i -= 0.5;
} echo '<br>';


/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 1 2.2 3.4 4.6 5.8 7 8.2 9.4
*/

for ($i = 1; $i <= 10;) {
    echo $i . ' ';
    $i += 1.2;
} echo '<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 13 17 21 25 29
*/

for ( $i = 13; $i <= 29;) {
    echo $i . ' ';
    $i += 4;
} echo '<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* Z5 Z7 Z9 Z11 Z13
*/

for ($i = 5; $i <= 13;) {
    echo 'Z'.$i . ' ';
    $i += 2;
} echo '<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* a2b3 a12b13 a22b23
*/

for ($i = 2; $i <= 22;) {
    echo 'a'.$i.'b'.$i +1 . ' ';
    $i += 10;
} echo '<br>';


/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5 6 8 9 10
*/

for ($i = 1; $i < 11; $i++) {
    if ($i == 7) continue;
    echo $i . ' ';
}
echo '<br>';

/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 13 17 21 29 33 37 45
*/

for ($i = 13; $i < 49; $i += 4) {
    if ($i == 25) continue;
    if ($i == 41) continue;
    echo $i . ' ';
}
echo '<br>';

/*
* Schreibe ein Programm, das per for-Schleife
* alle Zahlen von 1 bis 20 addiert
* und danach das Endergebnis ausgibt.
*/

for ($i = 1; $i < 21; $i++) {
    echo $i + $i. ' ';
}
echo '<br>';

/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5 4 3 2 1
*/

for ($i = 1; $i <= 9; $i++) {
    if ($i <= 5) {
        echo $i . ' ';
    } else {
        echo 10 - $i . ' ';
    }
} echo '<br>';
    /*
* Schreibe ein Programm, das mit EINER for-Schleife
* alle natürlichen Zahlen von 1 bis 39 sowie 61 bis 100
* (jeweils einschließlich) der Größe nach ausgibt.
* 1 2 3 4 ..... 36 37 38 39 61 62 63 64 ... 97 98 99 100
*/

for ($i = 1; $i <= 100; $i++) {
    if ($i >= 40 && $i <= 60)
        continue;
    echo $i . ' ';
}
