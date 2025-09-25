<?php

/* * * Zahlenreihen ** */

/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * 1 2 3 4 5
 */

for ($i = 1; $i<=5; $i ++){
    echo $i . " ";
}

echo "<br>";
/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * 100 90 80 70 60 50 40 30 20 10
 */

for ($k =100; $k >=10; $k -=10){
    echo $k . " ";
}
echo "<br>";
/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * 2000 3000 4000 5000 6000
 */
for ($j =2000; $j<=6000 ;$j +=1000){
    echo $j . " ";
}
echo "<br>";
/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * 2 1.5 1 0.5 0 -0.5 -1
 */
for ($l =2 ; $l >= -1; $l -=0.5){
    echo $l . " ";
}
echo "<br>";



/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * 1 2.2 3.4 4.6 5.8 7 8.2 9.4
 */
for ($h = 1; $h <= 9.4; $h += 1.2){
    echo $h . " ";
}
echo "<br>";

/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * 13 17 21 25 29
 */
for ($m =13; $m <=29 ; $m +=4){
    echo $m . " ";
}
echo "<br>";

/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * Z5 Z7 Z9 Z11 Z13
 */
for ($r = 5; $r <=13; $r+=2){
    echo "Z" . $r . " ";
}
echo "<br>";

/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * a2b3 a12b13 a22b23
 */
for ($c= 0; $c<=2; $c++ ){
    $a =$c * 10 + 2;
    $b =$c * 10 + 3;
    echo "a{$a}b{$b}";
}
echo "<br>";
for ($w=2; $w<=22; $w +=10){
    for ($e =3; $e <=23; $e +=10){
        echo "a$w b$e \n";
    }
}

echo "<br>";

/*
 * Schreibe EINE for-Schleife, die Folgendes ausgibt:
 * 1 2 3 4 5 6 8 9 10
 */
for ($t =1; $t <=10 ; $t++){
    if ($t == 7){
        continue;
    }
    echo $t . " ";
}
echo "<br>";




/*
 * Schreibe EINE for-Schleife, die Folgendes ausgibt:
 * 13 17 21 29 33 37 45
 */
$zahl=13;
for ($y = 0;$y<7;$y++){
    echo $zahl . " ";
    if ($y %3 == 2){
        $zahl +=8;
    }else {
        $zahl +=4;
    }
}
echo "<br>";

/*
 * Schreibe ein Programm, das per for-Schleife
 * alle Zahlen von 1 bis 20 addiert
 * und danach das Endergebnis ausgibt.
 */
$summe = 0;
for ($g=1; $g<=20; $g++){
    $summe += $g;
}
echo "die Summe von 1 bis 20 ist: $summe";
echo "<br>";



/*
 * Schreibe EINE for-Schleife, die Folgendes ausgibt:
 * 1 2 3 4 5 4 3 2 1
 */
for ($i = 1; $i <= 9; $i++) {
    if ($i <= 5) {
        echo $i . " ";           // hochzählen bis 5
    } else {
        echo (10 - $i) . " ";    // danach wieder runter
    }
}

/*
 * Schreibe ein Programm, das mit EINER for-Schleife
 * alle natürlichen Zahlen von 1 bis 39 sowie 61 bis 100
 * (jeweils einschließlich) der Größe nach ausgibt.
 * 1 2 3 4 ..... 36 37 38 39 61 62 63 64 ... 97 98 99 100
 */

