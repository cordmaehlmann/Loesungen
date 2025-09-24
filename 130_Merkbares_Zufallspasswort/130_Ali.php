<?php


/*
 * Merkbares Zufallspasswort
 *
 * Für eine Webseite muss ein Passwort erzeugt werden.
 * Du hast gemerkt, dass eine zufällige Folge von Buchstaben,
 * Ziffern und Sonderzeichen leicht zu programmieren,
 * jedoch schlecht zu merken ist.
 *
 * Nun mache folgende Vorgaben an ein automatisch generiertes Passwort.
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


function generatePassword():string
{
    // Vokale und Konsonanten definieren
    $vokale = ['a', 'e', 'u'];
    $konsonanten = ['b', 'c', 'd', 'f', 'g', 'h', 'k', 'm', 'n', 'p', 'r', 's', 't', 'w', 'x', 'z'];

    // Sonderzeichen
    $sonderzeichen = ['!', '@', '#', '$', '%', '&', '?'];

    // Zufällige Länge für das Wort (4–6 Buchstaben)
    $wortLaenge = rand(4, 6);

    // Wort aufbauen (abwechselnd Konsonant/Vokal)
    $wort = '';
    for ($i = 0; $i < $wortLaenge; $i++) {
        if ($i % 2 == 0) {
            // gerade Position: Konsonant
            $char = $konsonanten[array_rand($konsonanten)];
        } else {
            // ungerade Position: Vokal
            $char = $vokale[array_rand($vokale)];
        }
        $wort .= $char;
    }

    // Erster Buchstabe groß definieren
    $wort = ucfirst($wort);

    // Sonderzeichen wählen
    $sonderzeichen = $sonderzeichen[array_rand($sonderzeichen)];

    // Zahl mit 1–3 Stellen
    $zahl = strval(rand(1, 999));

    // Passwort zusammensetzen
    $password = $wort . $sonderzeichen . $zahl;

    // Sicherstellen, dass da sPasswort eine Länge von 6–10 Zeichen hat
    if (strlen($password) < 6 || strlen($password) > 10) {
        return generatePassword(); // neu versuchen
    }

    return $password;
}

// Ausgabe
echo generatePassword();