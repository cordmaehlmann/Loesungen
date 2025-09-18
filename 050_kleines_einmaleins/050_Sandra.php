
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table{
            border: 10px solid;
        }
        .silber{
            background-color: gray;
        }

    </style>
</head>
<body>
<h1>Das kleine Ein mal Eins</h1>

<?php
echo "<table>";

for ($i = 1;$i <= 10;$i++)
{
    $silberreihe = ($i %2 == 0) ? ' class="silber"' : '';
    echo "<tr{$silberreihe}>";

    for ($j = 1; $j <= 10; $j++){
        echo "<td>" . sprintf("%03d", $i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>

