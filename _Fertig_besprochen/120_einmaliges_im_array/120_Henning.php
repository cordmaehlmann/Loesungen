<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Einmaliges im Array</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table {
            border-collapse: collapse;
            margin: 20px 0;
            width: 400px;
        }
        th, td {
            border: 1px solid #666;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f08080;
            color: white;
        }
        .highlight {
            background-color: #90ee90;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php

$i = [4, 4, 8, 8, 9, 9, 12, 12, 42];     // Array mit 9 Zahlen (4 Zahlen doppelt, 1 Zahl nur einmal)

$incidents = array_count_values($i);    // Häufigkeiten zählen

$unique = 0;                            // Zahl finden, die nur 1x vorkommt

var_dump($i);

foreach ($incidents as $k => $qntty) {  // assoziatives Array erzeugen (Häufigkeiten aus Key/Value-Pair)
    if ($qntty === 1) {                 // wenn es ein Key/Value-Pair gibt, das exakt nur 1x vorkommt,
        $unique = $k;                   // dann weise diesem Schlüssel die neue Variable zu.
        break;                          // break, weil es laut Aufgabe nur eine einmalige Zahl gibt
    }
}
?>


<h2>Einmaliges im Array</h2>

<table>
    <tr>
        <th>Zahl</th>
        <th>Häufigkeit</th>
    </tr>
    <?php foreach ($incidents as $k => $qntty): ?>                    <!-- Schleife im Array wie oben  -->
        <tr class="<?php echo($qntty === 1) ? 'highlight' : '' ?>">   <!-- wenn $qntty exakt 1, dann highlighten -->
            <td><?php echo $k ?></td>                                 <!-- 4, 8, 9, 12, 42 -->
            <td><?php echo $qntty ?></td>                             <!-- 2, 2, 2, 2,   1 -->
        </tr>
    <?php endforeach; ?>
</table>

<p>Die einmalige Zahl und somit die Antwort ist: <b><?= $unique ?></b></p>

</body>
</html>

