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

/* Wort 4-6 Buchstaben, Sonderzeichen, Zahl 1-3 Stellen, zusammen max 10 Zeichen  */

$wortarray = [
        "Abend", "Adler", "Affen", "Ahorn", "Akten", "Alpen", "Anker", "Apfel", "Arbeit", "Atmen",
        "Baden", "Banan", "Bauer", "Beere", "Bibel", "Boden", "Bogen", "Bombe", "Brief", "Busen",
        "Cafes", "Creme", "Curry", "Couch", "Cello", "Chili", "Chaos", "Charme", "Check", "Codex",
        "Damen", "Datum", "Decke", "Diwan", "Dolch", "Donau", "Dosen", "Drama", "Druck", "Duden",
        "Ecken", "Eiben", "Eimer", "Eisen", "Engel", "Erde", "Esel", "Eulen", "Extra", "Echos",
        "Faden", "Fahne", "Fakten", "Falle", "Farbe", "Feder", "Feier", "Felsen", "Ferien", "Fest",
        "Gaben", "Garde", "Gasse", "Gebet", "Geist", "Geld", "Genie", "Geruch", "Geste", "Gilde",
        "Hafen", "Halle", "Hammer", "Harfe", "Haut", "Heber", "Hering", "Himmel", "Honig", "Huhn",
        "Idee", "Igel", "Insel", "Ironie", "Ideal", "Image", "Ingwer", "Inhalt", "Ibis", "Item",
        "Jacke", "Jagd", "Jause", "Jeton", "Joker", "Jolle", "Jubel", "Junge", "Jury", "Juwel",
        "Kabel", "Kader", "Kakao", "Kamel", "Karte", "Kegel", "Kerze", "Kiste", "Kopie", "Kugel",
        "Laden", "Lampe", "Leben", "Lehre", "Licht", "Limon", "Lippe", "Loben", "Luchs", "Lunge",
        "Magen", "Maler", "Mango", "Maske", "Meile", "Menge", "Messer", "Miene", "Mitte", "Mund",
        "Nadel", "Namen", "Natur", "Nebel", "Nest", "Noten", "Nudel", "Nuancen", "Nuss", "Nymphe",
        "Obst", "Ochse", "Ofen", "Ohren", "Olive", "Onkel", "Oper", "Ordnung", "Osten", "Otter",
        "Pause", "Pech", "Pferd", "Pilot", "Platz", "Pokal", "Probe", "Pudel", "Punkt", "Puzzle",
        "Qual", "Quark", "Quelle", "Quitte", "Quote", "Quer", "Qualle", "Quarz", "Quell", "Quip",
        "Rasen", "Ratte", "Raum", "Recht", "Rente", "Riese", "Rogen", "Ruder", "Ruf", "Ruhm",
        "Sache", "Salat", "Samen", "Satz", "Seele", "Segen", "Sicht", "Socke", "Sohle", "Sonne",
        "Tafel", "Tango", "Tasche", "Tempo", "Test", "Tiger", "Tinte", "Tisch", "Torte", "Tulpe",
        "Ufer", "Uhren", "Ulme", "Umweg", "Unfall", "Uhr", "Unmut", "Utopie", "Umbau", "Unrat",
        "Vater", "Vegan", "Velo", "Villa", "Vogel", "Vorteil", "Vulkan", "Voll", "Vase", "Video",
        "Wagen", "Walze", "Warte", "Weide", "Welle", "Werk", "Wiese", "Wolke", "Wunde", "Wurst",
        "Yacht", "Yoga", "Yeti", "Yen", "Yeti", "Yoga", "Ypsilon", "Yard", "Yuppie", "Yak",
        "Zahlen", "Zange", "Zebra", "Zeile", "Zelle", "Ziege", "Zitat", "Zobel", "Zucker", "Zweig"
];
$sonderzeichenarray = ['*','+','-','@','€','/','#','%','&','!','?'];
$generiertes_passwort = $wortarray[random_int(0, count($wortarray) - 1)];
$generiertes_passwort = $generiertes_passwort . $sonderzeichenarray[random_int(0, count($sonderzeichenarray) -1)];
$passwort_laenge = strlen($generiertes_passwort);
switch ($passwort_laenge) {
    case 5:
        $generiertes_passwort = $generiertes_passwort . random_int(0, 999);
        break;
    case 6:
        $generiertes_passwort = $generiertes_passwort . random_int(0, 99);
        break;
    case 7:
        $generiertes_passwort = $generiertes_passwort . random_int(0, 9);
        break;
}
echo $generiertes_passwort;
?>