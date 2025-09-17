<?php
//Variablen zu Aufgabe 1
$Vorname = "Philip";
$Nachname = "Wuggenig";
$Wohnort = "Stuttgart";

//Variablen zu Aufgabe 2
$rand1 = rand(0,10);
$rand2 = rand(0,10);
$rand3 = rand(0,10);

//Variablen zu Aufgabe 3
$wuerfel = rand(1,6);

//Ausführung Aufgabe 1
print($Vorname." ".$Nachname." wohnt in ".$Wohnort);
print"<br>";

//Ausführung Aufgabe 2
if($rand1!=$rand2 AND $rand1!=$rand3 AND $rand2!=$rand3) {
    if ($rand1 < $rand2 and $rand1 < $rand3) {
        print("$rand1 ist die kleinste Zahl.");
    } elseif ($rand2 < $rand3 and $rand2 < $rand1) {
        print("$rand2 ist die kleinste Zahl.");
    } elseif ($rand3 < $rand2 and $rand3 < $rand1) {
        print("$rand3 ist die kleinste Zahl.");
    }
}
elseif ($rand1 == $rand2 AND $rand1 != $rand3) {
        print($rand1.' ist die kleinste Zahl und wurde zweimal erzeugt.');
    }
elseif ($rand1 == $rand3 AND $rand2 != $rand3) {
    print($rand1.' ist die kleinste Zahl und wurde zweimal erzeugt.');
}
elseif ($rand2 == $rand3 AND $rand1 != $rand3) {
    print($rand2.' ist die kleinste Zahl und wurde zweimal erzeugt.');
}
else{
    print($rand1.' ist die kleinste Zahl und wurde dreimal erzeugt.');
}
print"<br>";


//Ausführung Aufgabe 3
switch($wuerfel) {
    case 6:
        print'Super lucky, mit deiner 6';
        break;
    case 5:
        print'Glückwunsch, ne 5!';
        break;
    default:
        print"Eine $wuerfel reicht nicht. Vesuch es mal mit mehr Glück.";
        break;
}