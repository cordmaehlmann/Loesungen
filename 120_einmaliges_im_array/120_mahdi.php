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


$random1 = rand(1, 20);
$random2 = rand(1, 20);
$random3 = rand(1, 20);
$random4 = rand(1, 20);
$random5 = rand(1, 20);

$array =[];
$array[] = $random1;
$array[] = $random1;
$array[] = $random2;
$array[] = $random2;
$array[] = $random3;
$array[] = $random3;
$array[] = $random4;
$array[] = $random4;
$array[] = $random5;

shuffle($array);





for($i = 0; $i < count($array); $i++){
    $counter = 0;
    for($j = 0; $j < count($array); $j++){
        if ($array[$i] == $array[$j] ){
            $counter++;


        }
    }
    if($counter == 1){
        echo" Einmalige Zahl:  $array[$i]\n";
    }
}
print_r($array);


