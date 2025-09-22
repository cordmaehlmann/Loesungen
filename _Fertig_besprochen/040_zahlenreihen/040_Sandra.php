<?php

/* * * Zahlenreihen ** */

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5
*/
for ($i = 1; $i <= 5; $i++) {
    echo $i . ' ';
}
echo "\n";

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 100 90 80 70 60 50 40 30 20 10
*/
for ($i = 100; $i >= 10; $i -= 10) {
    echo $i . ' ';
}
echo "\n";

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 2000 3000 4000 5000 6000
*/
for ($i = 2000; $i <= 6000; $i += 1000) {
    echo $i . ' ';
}
echo "\n";

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 2 1.5 1 0.5 0 -0.5 -1
*/
for ($i = 2; $i >= -1; $i -= 0.5) {
    echo $i . ' ';
}
echo "\n";

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 1 2.2 3.4 4.6 5.8 7 8.2 9.4
*/
for ($i = 1; $i <= 9.4; $i += 1.2) {
    echo $i . ' ';
}
echo "\n";

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 13 17 21 25 29
*/
for ($i = 13; $i <= 29; $i += 4) {
    echo $i . ' ';
}
echo "\n";
/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* Z5 Z7 Z9 Z11 Z13
*/
for ($i = 5; $i <= 13; $i += 2) {
    echo 'Z', $i . ' ';
}
echo "\n";
/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* a2b3 a12b13 a22b23
*/


/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5 6 8 9 10
*/
for ($i = 1; $i <= 10; $i++) {
    echo $i . ' ';
}
echo "\n";
/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 13 17 21 29 33 37 45
*/
for ($i = 13; $i <= 45; $i += 4) {
    echo $i . ' ';
    // +8
    if ($i == 21) {
        $i += 4;
    }
    if ($i == 37) {
        $i += 4;
    }

}
/*
* Schreibe ein Programm, das per for-Schleife
* alle Zahlen von 1 bis 20 addiert
* und danach das Endergebnis ausgibt.
*/
echo "\n";

$ergebnis = 0;

for ($i = 1; $i < 20; $i++) {
    $ergebnis += $i;
}
echo "Die Summe aller Zahlen ist: $ergebnis. \n";


/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5 4 3 2 1
*/
$i = 0;
for ($i = 1; $i <= 9; $i++) {
    if ($i <= 5) {
        echo $i . ' ';
    } else {
        echo (10 - $i) . ' ';
    }
}
echo "\n";
/*
* Schreibe ein Programm, das mit EINER for-Schleife
* alle natürlichen Zahlen von 1 bis 39 sowie 61 bis 100
* (jeweils einschließlich) der Größe nach ausgibt.
* 1 2 3 4 ..... 36 37 38 39 61 62 63 64 ... 97 98 99 100
*/
$i = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i == 40) {
        $i = 61;
    }

    echo $i . ' ';

}



