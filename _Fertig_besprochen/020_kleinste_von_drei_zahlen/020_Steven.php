<?php

$zahl1 = rand(0, 9);
$zahl2 = rand(0, 9);
$zahl3 = rand(0, 9);
if ($zahl1 <= $zahl2 && $zahl1 <= $zahl3) {
    print "Die kleinste Zahl ist $zahl1";
} elseif ( $zahl2 <= $zahl1 && $zahl2 <= $zahl3) {
    print "Die kleinste Zahl ist $zahl2";
} else {
    print "Die kleinste Zahl ist $zahl3";
}
