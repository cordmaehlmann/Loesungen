<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reiseziele</title>
</head>
<body>
<h2>Reiseziele</h2>
<?php

/*
 * Reiseziele
 *
 * Fülle ein Array mit deinen fünf Lieblingsreisezielen
 * und gib diese durchnummeriert aus.
 *
 * Hilfsmittel: Array, foreach
 */

$reiseziele = ['Ostsee','Harz','Erzgebirge','Bodensee','Nordsee'];
foreach ($reiseziele as $i => $ziel) {
    echo ($i + 1) . ". $ziel<br>";
}


?>
</body>
</html>