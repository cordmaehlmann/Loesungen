<?php
/* * * Zahlenreihen ** */

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5
*/
for ($i = 1; $i <= 5; $i++) {
    echo $i . ' ';
}
echo '<br>';
/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 100 90 80 70 60 50 40 30 20 10
*/
for ($j = 100; $j > 0; $j = $j - 10) {
    echo $j . ' ';
}
echo '<br>';
/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 2000 3000 4000 5000 6000
*/
for ($k = 2000; $k <= 6000; $k = $k + 1000) {
    echo $k . ' ';
}
echo '<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 2 1.5 1 0.5 0 -0.5 -1
*/
for ($l = 2; $l >= -1; $l = $l - 0.5) {
    echo $l . ' ';
}
echo '<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 1 2.2 3.4 4.6 5.8 7 8.2 9.4
*/

for ($m = 1; $m <= 9.4; $m = $m + 1.2){
    echo $m . ' ';
}
echo '<br>';


/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 13 17 21 25 29
*/

for ($n = 13; $n <= 29; $n = $n + 4) {
    echo $n . ' ';
}
echo '<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* Z5 Z7 Z9 Z11 Z13
*/
for ($o = 5; $o <= 13; $o = $o + 2) {
    echo "Z$o" . ' ';
}
echo '<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* a2b3 a12b13 a22b23
*/

$q = 3;
for ($p = 2; $p <= 22; $p = $p + 10) {
    echo "a$p"."b$q" . ' ';
    $q = $q + 10;
}
echo '<br>';

/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5 6 8 9 10
*/
for ($r = 1; $r <= 10; $r++) {
    if ($r == 7) continue;
    echo $r . ' ';
}
echo '<br>';

/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 13 17 21 29 33 37 45
*/
for ($s = 13; $s <= 45; $s = $s + 4) {
    if ($s == 25) {
        continue;
    }
    if ($s == 41) {
        continue;
    }
    echo $s . ' ';
}
echo '<br>';
/*
* Schreibe ein Programm, das per for-Schleife
* alle Zahlen von 1 bis 20 addiert
* und danach das Endergebnis ausgibt.
*/

$summe = 0;
for ($t = 1; $t <= 20; $t++) {
    $summe += $t;
}
echo "Die Summe der Zahlen beträgt: $summe";
echo '<br>';
/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5 4 3 2 1
*/

/* for ($u = 1, $v = 4; $u <= 6 && $v >=0; $u++, $v--) {
    if ($u == 6) {
        break;
    }
    if ($v == 0) {
        break;
    }
    echo $u . ' ' . $v . ' ';
}
echo '<br>';
*/
for ($u = 1; $u <= 9; $u++) { // 1 2 3 4 5 - 6 7 8 9
    if ($u <= 5) {
        echo $u . ' ';
    } else {
        echo (10 - $u) . ' ';
    }
}
echo '<br>';

/*
* Schreibe ein Programm, das mit EINER for-Schleife
* alle natürlichen Zahlen von 1 bis 39 sowie 61 bis 100
* (jeweils einschließlich) der Größe nach ausgibt.
* 1 2 3 4 ..... 36 37 38 39 61 62 63 64 ... 97 98 99 100
*/

for ($v = 1; $v <= 100; $v++) {
    if ($v <= 39) {
        echo $v . ' ';
    } elseif ($v >=61 ) {
        echo $v . ' ';

    }
}
echo '<br>';



