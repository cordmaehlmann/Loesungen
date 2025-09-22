<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Lieblingslottozahlen</title>
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
<title>Lieblingslottozahlen</title>

<h2>Befülle ein Array mit deinen Liebingslottozahlen <br> und gib sie per foreach als HTML-Liste aus.</h2>

<?php
$euroLotto = [50, 49, 48, 47, 46];
$euroLottoZusatz = [10, 9];

echo "<div>";
var_dump($euroLotto);
var_dump($euroLottoZusatz);

echo "<h3>Die heutigen Lottozahlen des Eurojackpots lauten:<br></h3>";
echo "<ol>";                        // hier mit der HTML-Liste beginnen --> Unterschied INT zu STR in 080_reiseziele
foreach ($euroLotto as $eL) {
    echo "<li> $eL</li>";
}
echo "</ol><br>";

echo "<h4>Die heutigen Zusatzzahlen lauten:<br></h4>";
echo "<ol>";                        // hier erneut mit der HTML-Liste beginnen --> Unterschied Integer zu Strings
foreach ($euroLottoZusatz as $eLZ) {
    echo "<li> $eLZ</li>";
}

echo "</ol></div><br>";
?>

</body>
</html>

