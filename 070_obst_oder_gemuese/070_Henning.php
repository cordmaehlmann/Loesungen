<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Obst oder Gemüse</title>
    <style>
        div {
            border: orangered 2px dotted;
            padding: 8px;
            width: 850px;
        }
    </style>
</head>
<body>
<title>Obst oder Gemüse</title>

<h2>Fülle EIN (nummerisches, eindimensionales) Array<br>
    mit Apfel, Birne, Kartoffel, Karotte und Banane.<br>
    Lies per Zufall ein Element des Arrays aus<br>
    und gib an, ob es sich um Obst oder Gemüse handelt.<br></h2>

<?php

echo "<div>";
$horti = ['Apfel', 'Birne', 'Kartoffel', 'Karotte', 'Banane'];      // Array befüllen
$eat = rand(1, 5);                                                  // zufälliges Element aus $horti
switch ($eat) {                                                     // alle 5 möglichen Fälle hardcoden.
    case 1:
        echo 'Dieser Apfel ist Obst.';
        break;
    case 2:
        echo 'Diese Birne ist Obst.';
        break;
    case 3:
        echo 'Diese Kartoffel ist Gemüse.';
        break;
    case 4:
        echo 'Diese Karotte ist Gemüse.';
        break;
    case 5:
        echo 'Diese Banane ist Obst.';
        break;
}
echo "</div><br>";
?>

<h3>Zusatz 1: <br> Die Reihenfolge im Array soll beliebig veränderbar sein</h3>
<?php

echo "<div>";
shuffle($horti);                            // Array mischen
var_dump($horti);                                  // Neue/aktuelle Reihenfolge dumpen

echo "</div><br>";
?>

<h3>Zusatz 2: <br>Die Wörter Obst & Gemüse sollen im Quellcode nur je einmal benutzen.<br>
    Wenn die beiden Wörter in einer Variablen gespeichert werden,<br>
    darf auch diese nur an einer Stelle ausgegeben oder zugewiesen werden.<br></h3>
<?php

echo "<div>";
$eat = $horti[rand(0, count($horti) - 1)];      // Neue Horti bestimmen
$fruit = 'Obst';                                // Kategorie bestimmen
$vgtbl = 'Gemüse';                              // Kategorie bestimmen

switch ($eat) {                                 // ZufallsHorti mit Kategorie bestimmen
    case 'Apfel':
    case 'Birne':
    case 'Banane':
        $ctgr = $fruit;                         // Kategorie als Variable wird eingeführt
        break;
    case 'Kartoffel':
    case 'Karotte':
        $ctgr = $vgtbl;                         // Kategorie wird erweitert.
        break;
    default:
        $ctgr = 'Unbekannt';

}
echo "$eat" . ' ' . "gehört zur Kategorie: $ctgr.";                // Ausgabe des ZufallsHorti

echo "</div><br>";
?>

</body>
</html>
