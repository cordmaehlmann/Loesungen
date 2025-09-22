<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lottoziehung</title>
    <style>
        div {
            background-color: goldenrod;
            padding: 20px;
            margin: 0 auto;
            width: 300px;
        }
        table {
            border-collapse: collapse;
            margin-top: 1px;
            border: 7px solid #fde8a9;
        }
        td {

            border: 2px solid #fde8a9;
            width: 36px;
            height: 36px;
            text-align: center;
            font-family: Arial;
            font-weight: 700;
        }
        .aktiv {
            font-family: Arial;
            font-weight: 700;
            background-color: #303030;
            color: white;
        }
        h2 {
            font-family: Arial;
            font-size: 40px;
            color: #cd1403;
            margin: 4px;
        }
        h4 {
             font-family: Arial;
             font-size: 25px;
             color: #cd1403;
             margin: 4px;
        }
        .nobreak {
            display: inline-block;
        }
    </style>
</head>
<body>
<div>
<h2 class="nobreak">Lotto 6 </h2><h4 class="nobreak">aus</h4><h2 class="nobreak"> 49</h2>
<?php
/*
 * Lottoziehung
 *
 * Schreibe ein Programm, das sechs verschiedene
 * Lottozahlen (6 aus 49) zieht und ausgibt.
 *
 * Hilfsmittel: Array, Schleife/Verzweigung, in_array()
 */

$lottozahlen = [];
/*
for ($i = 1; $i <= 6; $i++) {
    do {
        $zahl = random_int(1, 49);
    } while (in_array($zahl, $lottozahlen, true));
    $lottozahlen[$i] = $zahl;
}
*/
for ($i = 1; $i <= 6; $i++) {

    $zahl = random_int(1, 49);
    while (in_array($zahl, $lottozahlen, true)) {
        $zahl = random_int(1, 49);
    }

    $lottozahlen[$i] = $zahl;
}
/*
echo "<ol>";
foreach ($lottozahlen as $zahl) {
    echo "<li>$zahl</li>";
}
echo "</ol>";
*/

echo '<table>';
for ($r = 0; $r < 7; $r++) {
    echo '<tr>';
    for ($c = 0; $c < 7; $c++) {
        $n = $r * 7 + $c + 1;            // Zahl 1..49
        $isHit = in_array($n, $lottozahlen, true);

        // statt inline-style:
        $class = $isHit ? ' class="aktiv"' : '';
        echo '<td' . $class . '>' . $n . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>
</div>
</body>
</html>