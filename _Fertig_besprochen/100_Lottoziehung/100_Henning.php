<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Lottoziehung</title>
    <style>
        div {
            border: orangered 2px dotted;
            padding: 8px;
            width: 850px;
        }

        ol {
            list-style-type: decimal;
        }
    </style>
</head>
<body>
<title>Lottoziehung</title>

<h2>Schreibe ein Programm, das sechs verschiedene<br>
    Lottozahlen (6 aus 49) zieht und ausgibt.</h2>

<?php

$ziehung = [];                      // leeres Array, um die 6 gewünschten Zahlen zu sammeln

while (count($ziehung) < 6) {       // 6 Schleifendurchläufe
    $zahl = rand(1, 6);            // zufällige Zahl aus dem Bereich 1 bis 49

    if (!in_array($zahl, $ziehung)) {   // wenn die gezogene Zahl NICHT im array Ziehung ist,
        $ziehung[] = $zahl;             // dann füge diese zum Array hinzu.
    }
}

echo "<div>";
echo "<h4>Die heutigen Lottozahlen lauten:</h4>";
echo "<ol>";

foreach ($ziehung as $zi) {         // Für jede Bedingung, die TRUE ist, gib aus:
    echo "<li>$zi</li>";            // Ergebnis der Ziehung
}

echo "</div><br>";
?>

</body>
</html>


