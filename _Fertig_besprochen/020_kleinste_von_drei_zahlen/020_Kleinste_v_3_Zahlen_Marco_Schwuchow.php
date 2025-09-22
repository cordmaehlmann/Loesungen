<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kleinste von 3 Zahlen</title>
</head>
<body>
<h2>Kleinste von 3 Zahlen</h2>
<?php
    $zahl1 = rand(1, 10);
    print "<p>Zahl 1 = $zahl1</p>";

    do {
        $zahl2 = rand(1, 10);
    } while ($zahl2 == $zahl1);
    print "<p>Zahl 2 = $zahl2</p>";

    do {
        $zahl3 = rand(1, 10);
    } while ($zahl3 == $zahl1 || $zahl3 == $zahl2);
    print "<p>Zahl 3 = $zahl3</p>";

    if ($zahl1 < $zahl2 && $zahl1 < $zahl3) {
        print "<p>Die kleinste Zahl ist: $zahl1</p>";
    }
    elseif ($zahl2 < $zahl1 && $zahl2 < $zahl3) {
        print "<p>Die kleinste Zahl ist: $zahl2</p>";
    }
    else {
        print "<p>Die kleinste Zahl ist: $zahl3</p>";
    }
?>

</body>
</html>