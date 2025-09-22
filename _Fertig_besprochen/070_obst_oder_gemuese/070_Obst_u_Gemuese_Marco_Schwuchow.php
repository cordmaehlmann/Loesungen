<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Obst und gemüse</title>
</head>
<body>
<h2>Obst und Gemüse</h2>

<?php
/*
 * Obst oder Gemüse
 *
 * Fülle EIN (nummerisches, eindimensionales) Array
 * mit Apfel, Birne, Kartoffel, Karotte und Banane.
 * Lies per Zufall ein Element des Arrays aus
 * und gib an, ob es sich um Obst oder Gemüse handelt.
 *
 * Hilfsmittel: array, rand(), switch-case
 *
 * Zusatz 1: Die Reihenfolge im Array soll beliebig veränderbar sein
 * Zusatz 2: Die Wörter Obst & Gemüse sollen im Quellcode
 *           nur je einmal benutzen.
 *           Wenn die beiden Wörter in einer Variablen gespeichert werden,
 *           darf auch diese nur an einer Stelle ausgegeben oder zugewiesen werden.
 */

$obstgemuese = ['Apfel','Birne','Kartoffel','Karotte','Banane'];
$o = 'Obst';
$g = 'Gemüse';

$zufall = random_int(0,count($obstgemuese)-1);
$startsWithK = str_starts_with($obstgemuese[$zufall], 'K');
if (str_starts_with($obstgemuese[$zufall], 'K' )) {
    echo $obstgemuese[$zufall] . ' ist ' . $g . '<br>';
} else {
    echo $obstgemuese[$zufall] . ' ist ' . $o . '<br>';
}

?>

</body>
</html>