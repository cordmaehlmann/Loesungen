<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Würfeln</title>
    <style>
        body {
            font-family: Arial;
        }
    </style>
</head>
<body>
<h2>Würfeln</h2>
<div style="display: flex; gap: 20px; align-items: center; border: 1px solid black; background-color: #fffbef; width: 300px; height: 160px">
    <div style="flex: 1; padding: 10px; text-align: center; width: 120px">
        <form method="post">
            <input type="submit" value="Würfeln">
        </form>
        <br>
        <div id="ergebnis">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $wurf = rand(1, 6);
                echo "<p>Gewürfelt: <br>$wurf</p>";
            }
            ?>
        </div>


    </div>
    <div style="flex: 2; padding: 10px; text-align: left; width: 150px">
        <div id="ausgabe">
            <?php
            if (isset($wurf)) {
                if ($wurf == 6) {
                    echo "<p>Super, eine 6!</p>";
                } elseif ($wurf == 5) {
                    echo "<p>Immerhin noch eine 5!</p>";
                } else {
                    echo "<p>Das reicht nicht!</p>";
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>