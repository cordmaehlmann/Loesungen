<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Passwortgenerator</title>
    <style>
        div {
            border: orangered 2px dotted;
            padding: 8px;
            width: 850px;
        }
    </style>
</head>
<body>
<title>Passwortgenerator</title>

<h2>Schreibe ein Programm, das ein "merkbares" Zufallspasswort ausgibt.<br>
    4 Arrays -> 2x für Wort [4-6 Buchstaben, abwechselnd Konsonanten, Vokale],<br>
    Sonderzeichen, Zahl [1-3 Stellen]</h2>

<?php
echo "<div>";

// ==========================
// ARRAYS DEFINIEREN
// ==========================

$vowels = ['a','e','u'];                                // ohne "i" und "o"
$consonants = [
    'b','c','d','f','g','h','j','k','m',                // ohne "l"
    'n','p','q','r','s','t','v','w','x','y','z'
];
$symbols = ['%', '+', "'", '-', '/', '!', ',', '$'];
$numbers = ['0','1','2','3','4','5','6','7','8','9'];

// ==========================
// FUNKTION: Passwort generieren
// ==========================

function generatePassword($vowels, $consonants, $symbols, $numbers) {
    $wordLength = rand(4,6);                                // zufällige Wortlänge
    $word = "";

    $useConsonant = true;                                   // Erstes Zeichen: Konsonant
    for ($i = 0; $i < $wordLength; $i++) {
        if ($useConsonant) {
            $word = $word . $consonants[array_rand($consonants)];
        } else {
            $word = $word . $vowels[array_rand($vowels)];
        }
        $useConsonant = !$useConsonant;                     // abwechseln
    }

    $word = ucfirst($word);                                 // Erster Buchstabe GROß

    $symbol = $symbols[array_rand($symbols)];               // Sonderzeichen auswählen

    $numberLength = rand(1,3);                              // Zahl mit 1–3 Stellen
    $number = "";
    for ($i = 0; $i < $numberLength; $i++) {
        $number = $number . $numbers[array_rand($numbers)];
    }

    return $word . $symbol . $number;                       // Endgültiges Passwort
}

// ==========================
// AUSGABE
// ==========================

$passwort = generatePassword($vowels, $consonants, $symbols, $numbers);
echo "<h3>Generiertes Passwort:</h3>";
echo "<p><strong>$passwort</strong></p>";

echo "</div>";
?>
</body>
</html>


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
 *
 * PASSWORT: 4 Arrays -> 2x für Wort [4-6 Buchstaben, abwechselnd Konsonanten, Vokale], Sonderzeichen, Zahl [1-3 Stellen]
 *
 */

