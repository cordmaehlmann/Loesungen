<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Reiseziele</title>
    <style>
        body{
            background-color: lightblue;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>Meine Wunsch-Reiseziele</h1>
<?php

/*
 * Reiseziele
 *
 * Fülle ein Array mit deinen fünf Lieblingsreisezielen
 * und gib diese durchnummeriert aus.
 *
 * Hilfsmittel: Array, foreach
 */

$reiseziele =['Japan', 'Jamaika', 'New York', 'Maui', 'Brasilien'];
$zahlstelle = 1;

foreach ($reiseziele as $reise)
{
    echo $zahlstelle.'. '.$reise.'<br>';
    $zahlstelle++;
}
?>
</body>
</html>