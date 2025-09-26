<?php

/*
 * Bubblesort
 *
 * Schreibe eine Funktion,
 * der man ein nummerisches Array mit
 * beliebig vielen Zahlen als Werten übergeben kann
 * und die dieses Array sortiert und zurück gibt.
 *
 * Benutze hierzu den Bubblesort-Algorithmus.
 * Bei diesem wird das Array durchlaufen
 * und jede Zahl mit der jeweils nachfolgenden Zahl verglichen.
 * Wenn die nachfolgende Zahl kleiner ist,
 * werden die Zahlen getauscht.
 * Das Array wird solange durchlaufen,
 * bis bei einem Durchlauf keine Zahlen getauscht werden müssen.
 *
 * Algorithmen: function, arrays, for/while/foreach-Schleifen, Inkrement-Operator, if/elseif/else-Bedingungen,
 */


//=============================
// Eingabe
//=============================

$numbers = [1, 2, 3, 8, 4, 5, 6, 7];

//=============================
// Verarbeitung
//=============================

function bubbleSort($numbers) {
    $n = count($numbers);               // Länge des arrays bestimmen
    $sort = true;                       // Abbruchbedingung

    while ($sort) {                     // solange sortierung bis es nicht abgeschlossen ist => while-Schleife
        $sort = false;                  // weitermachen bis true

        for ($i = 0; $i < $n - 1; $i++) {           // Durchlauf durch das Array
            if ($numbers[$i] > $numbers[$i + 1]) {
                $tempVar = $numbers[$i];            // Werte tauschen mit temporärer Variablen
                $numbers[$i] = $numbers[$i + 1];
                $numbers[$i + 1] = $tempVar;

                $sort = true;
            }
        }
        $n--;       // Wenn das jeweils größte Element am Ende des Arrays steht, kann die Zahl verkleinert werden.
    }
    return $numbers;
}

// =============================
// Ausgabe
// =============================
$sorted = bubbleSort($numbers);

echo "Unsortiertes Array: " . implode(", ", $numbers) . "<br>\n";

echo "Sortiertes Array: ";
for ($i = 0; $i < count($sorted); $i++) {
    echo $sorted[$i] . ", ";
}
echo "<br>\n";


?>




























