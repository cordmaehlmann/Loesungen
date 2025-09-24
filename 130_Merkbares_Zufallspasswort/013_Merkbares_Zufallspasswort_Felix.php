<?php

/*
 * Merkbares Zufallspasswort
 *
 * Für eine Webseite muss ein Passwort erzeugt werden.
 * Du hast gemerkt, dass eine zufällige Folge von Buchstaben,
 * Ziffern und Sonderzeichen leicht zu progarmmieren,
 * jedoch schlecht zu merken ist.
 *
 * Nun mache folgende Vorgaben an ein automatisch generientes Passwort.
 * Das Passwort muss insgesamt mindestens sechs, maximal zehn Zeichen enthalten.
 * Das Passwort besteht aus einem "Wort",
 * gefolgt von genau einem Sonderzeichen und danach aus einer Zahl.
 * Das "Wort" hat vier, fünf oder sechs Buchstaben,
 * wobei nur der erste ein Großbuchstabe sein darf.
 * Die Zahl hat eine, zwei oder drei Stellen.
 * Im "Wort" wechseln Konsonanten mit Vokalen immer ab.
 * Verwechselbare Zeichen sollen nicht vorkommen.
 *
 * Schreibe ein Programm, das ein "merkbares" Zufallspasswort ausgibt.
 */


// Variables & Arrays
$word = '';
$special = '';
$number = '';
$kons = ['b', 'c', 'd', 'f', 'g', 'h', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z'];
$voc = ['a', 'e', 'i', 'u'];
$nums = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
$spec = ['(', '!',  '#',  '$',  '%', '(', ')', '*', '+', '-', '/', ':', ';', '=', '?', '@', '[', ']', '^', '_', '{', '|', '}', '~', ')'];
$countNums = rand(1, 3);
$countWord = rand(4, 6);
$passCount = rand(6, 10);

// Buchstaben
for ($i = 0; $i < $countWord; $i++) {
    if ($i % 2 === 0) {
        $char = $kons[array_rand($kons)];
    } else {
        $char = $voc[array_rand($voc)];
    }
    if ($i == 0) {
        $char = strtoupper($char);
    }

    $word = $word . $char;
}

// echo $word;

// Sonderzeichen

$special = $spec[array_rand($spec)];

//echo $word . $special;

// Zahlen

for ($i = 0; $i < $countNums; $i++) {
    $number = $number . $nums[array_rand($nums)];
}

echo 'Passwort: '. $word . $special . $number;




