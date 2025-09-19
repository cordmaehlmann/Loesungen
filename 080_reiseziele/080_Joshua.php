<?php

# Reiseziele

echo "Fülle ein Array mit deinen fünf Lieblingsreisezielen<br>";
echo "und gib diese durchnummeriert aus.<br>";
echo "Hilfsmittel:<br>";
echo "Array, foreach<br>";

$reiseziele = ["Malediven", "Santorini", "Kyoto", "Banff-Nationalpark", "Kroatien"];

// Durchnummeriert ausgeben
$nummer = 1;
foreach ($reiseziele as $ziel) {
    echo $nummer . ". " . $ziel . "<br>";
    $nummer++;
}