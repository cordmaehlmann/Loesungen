<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teilbar</title>
</head>
<body>
<h2>Teilbar</h2>

<?php
/*
* Teilbar
*
* Schreibe ein Skript, das alle Zahlen von 1 bis 100 ausgibt,
* die durch drei teilbar sind.
* Hilfsmittel: Schleife, if, Modulo
*
* Zusatz 1: Gib die Anzahl der Zahlen aus
*
* Zusatz 2: Das Programm soll nun alle Zahlen ausgeben,
*           die durch 3 ODER 7 teilbar sind.
*/

echo 'Durch 3 teilbar: <br>';
$anzahl = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . ' ';
        $anzahl++;
    }
}
echo '<br>Gesamtzahl: ' . $anzahl
        . '<p></p> Durch 3 oder 7 teilbar: <br>';
for ($i = 1; $i <= 100; $i++) {
    if (($i % 3 == 0) || ($i % 7 == 0)) {
        echo $i . ' ';
    }
}

?>
</body>
</html>