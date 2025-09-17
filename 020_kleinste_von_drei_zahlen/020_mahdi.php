<<<<<<< HEAD
<?php
/*
* Kleinste von drei Zahlen
*
* Schreibe ein Programm,
* das drei Variablen mit zufälligen Zahlen befüllt.
* Dann soll das Programm testen,
* welcher Zahlenwert der kleinste ist und diesen ausgeben.
*
* Hilfsmittel: rand(), if-elseif-else
*/
$zahl1 = rand(1,100);
$zahl2 = rand(1,100);
$zahl3 = rand(1,100);

if($zahl1 <$zahl2 && $zahl1<$zahl3){
    echo $zahl1;
}elseif($zahl1 >$zahl2 && $zahl2< $zahl3){
    echo $zahl2;
}else{
    echo $zahl3;
}

print "\nzahl1 = $zahl1, zahl2 = $zahl2, zahl3 = $zahl3";
=======
<?php
/*
* Kleinste von drei Zahlen
*
* Schreibe ein Programm,
* das drei Variablen mit zufälligen Zahlen befüllt.
* Dann soll das Programm testen,
* welcher Zahlenwert der kleinste ist und diesen ausgeben.
*
* Hilfsmittel: rand(), if-elseif-else
*/
$zahl1 = rand(1,100);
$zahl2 = rand(1,100);
$zahl3 = rand(1,100);

if($zahl1 <$zahl2 && $zahl1<$zahl3){
    echo $zahl1;
}elseif($zahl1 >$zahl2 && $zahl2< $zahl3){
    echo $zahl2;
}else{
    echo $zahl3;
}

print "\nzahl1 = $zahl1, zahl2 = $zahl2, zahl3 = $zahl3";
>>>>>>> f5a3787fb3c455333994b90e89ab8f224b967066
