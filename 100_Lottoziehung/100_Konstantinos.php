<?php

/*
 * Lottoziehung
 *
 * Schreibe ein Programm, das sechs verschiedene
 * Lottozahlen (6 aus 49) zieht und ausgibt.
 *
 * Hilfsmittel: Array, Schleife/Verzweigung, in_array()
 */
$array = [];
$num=null;
while (count($array)<=6) {
    $num=rand(1,49);
    if (!in_array($num, $array)) {
        $array[] = $num;
    }
}
foreach ($array as $num) {
    echo $num.' ';
}