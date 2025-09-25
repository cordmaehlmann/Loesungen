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

$doppelteZahlen=[];
$einzigeZahl=[];
$a=0;
while($a<4) {
    $randomZahl=rand(1,99);
    if(!in_array($randomZahl,$doppelteZahlen)) {
        array_push($doppelteZahlen, $randomZahl, $randomZahl);
        $a++;
    }
}
var_dump($doppelteZahlen);

for($i=0;$i<1;$i++) {
    $randomZahl=rand(0,99);
    if(!in_array($randomZahl,$doppelteZahlen)){
        array_unshift($einzigeZahl,$randomZahl);
    }else {
        $i--;
    }
}
var_dump($doppelteZahlen);


$myArray= array_merge($doppelteZahlen,$einzigeZahl);
shuffle($myArray);
var_dump($myArray);
$count = array_count_values($myArray);
$suchendeZahl = array_search(1, $count);
echo $suchendeZahl." wurde nur einmal in der Liste verwendet!";

