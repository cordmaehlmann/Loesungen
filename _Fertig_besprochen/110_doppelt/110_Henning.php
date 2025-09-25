<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Doublettenprüfung</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
            width: 400px;
        }
        th, td {
            border: 1px solid #555;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f08080;
            color: white;
        }
        .true {
            background-color: #90ee90; /* grün */
        }
        .false {
            background-color: #ffcccb; /* rot */
        }
    </style>
</head>
<body>

<h2>Überprüfung auf Doubletten</h2>

<?php
function noDuplicates(array $arr): bool {
    return count($arr) === count(array_unique($arr));
}

$smpl_1d8 = [1, 2, 3, 4, 5, 6, 7, 8];       // keine Doubletten
$dbl_2d4  = [1, 2, 3, 4, 1, 2, 3, 4];       // enthält Doubletten

$tests = ["1W8" => $smpl_1d8, "2W4"  => $dbl_2d4];      //
?>

<table>
    <tr>
        <th>Array</th>
        <th>Inhalt</th>
        <th>Keine Doubletten?</th>
    </tr>
<?php
    foreach ($tests as $name => $arr): ?>
        <tr>
            <td><?= htmlspecialchars($name) ?></td>
            <td><?= implode(", ", $arr) ?></td>
            <?php $result = noDuplicates($arr); ?>
            <td class="<?= $result ? 'true' : 'false' ?>">
                <?= $result ? "Ja" : "Nein" ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
