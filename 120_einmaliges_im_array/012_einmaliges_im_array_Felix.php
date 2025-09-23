<?php

/*
 * Einmaliges im Array
 *
 * Schreibe ein Programm, das ein Array mit neun Zahlen befüllt.
 * Dabei sollen vier Zahlen doppelt vorkommen
 * und eine Zahl nur einmal.
 *
 * Schreibe dann ein Programm, das aus diesem Array die Zahl findet,
 * die nur einmal vorkommt.
 */

$arraySingles = [];
$counter = [];

while (count($arraySingles) < 5) {
    $i = rand(1, 5);
    if (!in_array($i, $arraySingles)) {
        $arraySingles[] = $i;
    }

}

$arrayFinal = array_merge($arraySingles, $arraySingles);

unset($arrayFinal[array_rand($arrayFinal)]);
$arrayFinal = array_values($arrayFinal);

//print_r($arrayFinal);

foreach ($arrayFinal as $final) {
    if (isset($counter[$final])) {
        $counter[$final]++;
    } else {
        $counter[$final] = 1;
    }
}

foreach ($counter as $num => $count) {
    if ($count === 1) {
       foreach ($arrayFinal as $numFin =>$value) {
           echo $value. ' ';
       }
       echo "<br>";
       echo 'Die einmal vorkommende Zahl ist: ' . $num;
       break;
    }
}



