<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zahlenreihen</title>
    <style>
        div {
            border: #9400D3 2px solid;
            padding: 10px;
            width: 400px;
        }
    </style>
</head>
<body>
<h2>Zahlenreihen</h2>

<?php

/* * * Zahlenreihen ** */

/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * 1 2 3 4 5
 */
echo "<div>";
for ($i = 1; $i <= 5; $i++) {
     echo $i . ' ';
};
echo "</div><br>";

/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * 100 90 80 70 60 50 40 30 20 10
 */
echo "<div>";
for ($i = 100; $i >= 10; $i -= 10) {
    echo $i . ' ';
};
echo "</div><br>";

/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * 2000 3000 4000 5000 6000
 */
echo "<div>";
for ($i = 2000; $i <= 6000; $i += 1000) {
    echo $i . ' ';
};
echo "</div><br>";

/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * 2 1.5 1 0.5 0 -0.5 -1
 */
echo "<div>";
for ($i = 30; $i >= 0; $i -= 5) {
    echo $i / 10 - 1 . ' ';
};
echo "</div><br>";

/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * 1 2.2 3.4 4.6 5.8 7 8.2 9.4
 */
echo "<div>";
for ($i = 10; $i <= 94; $i += 12) {
    echo $i /10 . ' ';
};
echo "</div><br>";

/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * 13 17 21 25 29
 */
echo "<div>";
for ($i = 13; $i <= 29; $i += 4) {
    echo $i . ' ';
};
echo "</div><br>";

/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * Z5 Z7 Z9 Z11 Z13
 */
echo "<div>";
for ($i = 5; $i <= 13; $i += 2) {
    echo 'Z' . $i . ' ';
};
echo "</div><br>";

/*
 * Schreibe eine for-Schleife, die Folgendes ausgibt:
 * a2b3 a12b13 a22b23
 */
echo "<div>";
for ($i = 0; $i <= 2; $i++) {
    if ($i == 0) {
        echo 'a' . '2b' . '3 ';
    } else
    echo 'a' . $i . '2b' . $i . '3 ';
};
echo "</div><br>";


/*
 * Schreibe EINE for-Schleife, die Folgendes ausgibt:
 * 1 2 3 4 5 6 8 9 10
 */
echo "<div>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 7) continue;
    echo $i . ' ';
}
echo "</div><br>";

/*
 * Schreibe EINE for-Schleife, die Folgendes ausgibt:
 * 13 17 21 29 33 37 45
 */
echo "<div>";
for ($i = 13; $i <= 45; $i += 4) {
    if (($i == 25) || ($i == 41))  continue;
    echo $i . ' ';
}
echo "</div><br>";

/*
 * Schreibe ein Programm, das per for-Schleife
 * alle Zahlen von 1 bis 20 addiert
 * und danach das Endergebnis ausgibt.
 */
echo "<div>";
$gesamt = 0;
for ($i = 1; $i <= 20; $i++) {
    echo $i . ' ';
    $gesamt = $gesamt + $i;
}
echo '<br>Summe: ' . $gesamt;
echo "</div><br>";

/*
 * Schreibe EINE for-Schleife, die Folgendes ausgibt:
 * 1 2 3 4 5 4 3 2 1
 */
echo "<div>";
for ($i = 1; $i <= 9; $i++) {
    if ($i <= 5) {
        echo $i . ' ';
    } else {
        echo (10 - $i) . ' ';
    }
}
echo "</div><br>";

/*
 * Schreibe ein Programm, das mit EINER for-Schleife
 * alle natürlichen Zahlen von 1 bis 39 sowie 61 bis 100
 * (jeweils einschließlich) der Größe nach ausgibt.
 * 1 2 3 4 ..... 36 37 38 39 61 62 63 64 ... 97 98 99 100
 */
echo "<div>";
for ($i = 1; $i <= 100; $i++) {
    if (($i > 39) && ( $i < 61)) continue;
    echo $i . ' ';
}
echo "</div><br>";

?>

</body>
</html>