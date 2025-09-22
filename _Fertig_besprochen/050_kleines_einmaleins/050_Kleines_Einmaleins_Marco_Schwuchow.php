<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kleines Einmaleins</title>
    <style>
        body {
            font-family: Arial;
        }
        table {
            border-collapse: collapse;
        }
        td {
            text-align: right;
            border: 1px solid black;
            padding: 10px;
        }
        .silver {
            background-color: silver;
        }
    </style>
</head>
<body>
<h2>Kleines Einmaleins</h2>

<?php
echo "<table>";

for ($i = 1; $i <= 10; $i++) {

    if ($i % 2 == 0) {
        echo "<tr class='silver'>";
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
