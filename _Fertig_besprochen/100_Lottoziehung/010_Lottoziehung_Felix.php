<?php

/*
 * Lottoziehung
 *
 * Schreibe ein Programm, das sechs verschiedene
 * Lottozahlen (6 aus 49) zieht und ausgibt.
 *
 * Hilfsmittel: Array, Schleife/Verzweigung, in_array()
 */


$lottozahlen = [];
/*
for ($i = 1; $i <= 6; $i++) {
    $zahl = rand(1, 6);
    // $lottozahlen[] = $zahl;
    // echo $zahl . ' ';
    if (!in_array($zahl, $lottozahlen)) {
        $lottozahlen[] = $zahl;
    } else {
        $i--;
    }
}
*/

for ($i = 1;; $i++) {
    $zahl = rand(1, 6);
    // $lottozahlen[] = $zahl;
    // echo $zahl . ' ';
    if (!in_array($zahl, $lottozahlen)) {
        $lottozahlen[] = $zahl;
    }
    if (count($lottozahlen) >= 6) break;
}

sort($lottozahlen);

foreach ($lottozahlen as $lottozahl) {
    echo  $lottozahl . "\n";
}

echo "<br>";

$lottozahlen2 = [];
while (count($lottozahlen2) < 6) {
    $zahl2 = rand(1, 6);
    if (!in_array($zahl2, $lottozahlen2)) {
        $lottozahlen2[] = $zahl2;
    }
}

sort($lottozahlen2);

foreach ($lottozahlen2 as $lottozahl2) {
    echo  $lottozahl2 . "\n";
}


