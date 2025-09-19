<?php


/* * * Zahlenreihen ** */

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5
*/

for ($i = 1; $i <= 5; $i++) {
    print $i . '<br>';
}
print'<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 100 90 80 70 60 50 40 30 20 10
*/

for ($i = 100; $i >= 10; $i-= 10){
    print $i . '<br>';
}
print'<br>';


/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 2000 3000 4000 5000 6000
*/

for ($i = 2000; $i <= 6000; $i += 1000){
    print $i . '<br>';
}

print'<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 2 1.5 1 0.5 0 -0.5 -1
*/

for ($i = 2; $i >= -1; $i -= 0.5){
    print $i . '<br>';
}
print'<br>';


/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 1 2.2 3.4 4.6 5.8 7 8.2 9.4
*/

for ($i = 1; $i <= 9.4; $i += 1.2){
    print $i . '<br>';
}
print'<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* 13 17 21 25 29
*/

for($i = 13; $i <= 29; $i += 4){
    print $i . '<br>';
}
print'<br>';


/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* Z5 Z7 Z9 Z11 Z13
*/

for($i = 5; $i <= 13; $i += 2){
    print 'Z' . $i . '<br>';
}
print'<br>';

/*
* Schreibe eine for-Schleife, die Folgendes ausgibt:
* a2b3 a12b13 a22b23
*/

for($i = 0; $i < 3; $i++){
    $i1 = 2 + ($i * 10);
    $i2 = $i1 + 1;
    print 'a' . $i1 . 'b' . $i2 . '<br>';
}
print'<br>';

/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5 6 8 9 10
*/

for($i = 1; $i <= 10; $i++){
    print $i . '<br>';
}
print'<br>';

/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 13 17 21 29 33 37 45
*/

for($i = 13; $i <= 45; $i += 4) {
    if ($i === 25 || $i === 41){
        continue;
}
    print $i . '<br>';
}
print'<br>';

/*
* Schreibe ein Programm, das per for-Schleife
* alle Zahlen von 1 bis 20 addiert
* und danach das Endergebnis ausgibt.
*/

$j=0;
for($i=1; $i<20; $i++) {
    $j+=$i;
    print $j . '<br>';
}
print'<br>';

/*
* Schreibe EINE for-Schleife, die Folgendes ausgibt:
* 1 2 3 4 5 4 3 2 1
*/
for ($i=1; $i<=5; $i++) {
    print $i . '<br>';
}
for ($i=4; $i>=1; $i--) {
    print $i . '<br>';
}
print '<br>';

/*
* Schreibe ein Programm, das mit EINER for-Schleife
* alle natürlichen Zahlen von 1 bis 39 sowie 61 bis 100
* (jeweils einschließlich) der Größe nach ausgibt.
* 1 2 3 4 ..... 36 37 38 39 61 62 63 64 ... 97 98 99 100 */

echo "\n";
for ($i=1; $i<=100; $i++) {
    echo "$i ";
}