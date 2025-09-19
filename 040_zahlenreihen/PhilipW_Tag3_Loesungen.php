<?php

// Aufgabe 1
for ($i = 1; $i <= 5; $i++) {
    print $i . " ";
}
print "<br>";


// Aufgabe 2
for ($i = 100; $i > 0; $i=$i-10) {
    print $i . " ";
}
print "<br>";


// Aufgabe 3
for ($i = 2000; $i <= 6000; $i=$i+1000) {
    print $i . " ";
}
print "<br>";


// Aufgabe 4
for ($i = 2; $i >= -1; $i=$i-0.5) {
    print $i . " ";
}
print "<br>";


// Aufgabe 5
for ($i = 1; $i <= 10; $i=$i+1.2) {
    print $i . " ";
}
print "<br>";


// Aufgabe 6
for ($i = 13; $i <= 30; $i=$i+4) {
    print $i . " ";
}
print "<br>";


// Aufgabe 7
for ($i = 5; $i <= 14; $i=$i+2) {
    print "Z$i ";
}
print "<br>";


// Aufgabe 8
for ($i = 2; $i <= 25; $i=$i+10) {
    print "a$i" . "b" . ($i+1) . " ";
}
print "<br>";


// Aufgabe 9
for ($i = 1; $i <= 10; $i++) {
    if ($i ==7) continue;
    print "$i ";
}
print "<br>";


// Aufgabe 10
$j = 0;
$x = 4;
for ($i = 13; $i <= 45; $i+=4) {
    if(($i-9)%16 == 0) continue;
    print "$i ";
}
print "<br>";


// Aufgabe 11
$summe = 0;
for ($i = 1; $i <= 20; $i++) {
    $summe += $i;
}
print "$summe <br>";


// Aufgabe 12
$x = 1;
for ($i = 1; $i >= 0; $i = $i + $x) {
    print "$i ";
    if($i == 5){
        $x = -1;
    }
}
print "<br>";


// Aufgabe 13
for ($i = 1; $i <= 100; $i++) {
    print "$i ";
    if($i == 39){
        $i = 60;
    }
}
print "<br>";
?>


<!-- Aufgabe 14 -->

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kleines Einmaleins</title>
    <style>
        table{
            border-collapse: collapse;
            background-color: #FFB6C1;
        }
        td, tr{
            border: 3px solid tomato;
            padding: 2px;
            text-align: center;
            vertical-align: middle;
        }
        .silber{
            background-color: silver;
        }
    </style>
</head>
<body>

    <?php
    echo "<table>";
    for($i = 1; $i <= 10; $i++) {
        if ($i % 7 == 0) {
            echo "<tr class='silber'>";
        } else {
            echo "<tr>";
        }
        for ($j = 1; $j <= 10; $j++) {
            $produkt = $i * $j;
            echo "<td>" . sprintf("%03d", $produkt) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>
</html>
