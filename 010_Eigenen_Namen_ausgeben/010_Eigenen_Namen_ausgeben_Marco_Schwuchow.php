<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Eigenen Namen eingeben</title>
    <style>
        body {
            font-family: Arial;
        }
    </style>
</head>
<body>
<h2>Eigenen Namen eingeben</h2>

<form method="post" action="">
    <div style="display: flex; gap: 20px; align-items: start;">
        <div style="flex: 1; padding: 10px; text-align: right; width: 80px">
            <label for="vorname">Vorname:</label><br>
            <label for="nachname">Nachname:</label><br>
            <label for="wohnort">Wohnort:</label><br>
        </div>
        <div style="flex: 2; padding: 10px; text-align: left; width: 160px">
            <input type="text" name="vorname" id="vorname" required><br>
            <input type="text" name="nachname" id="nachname" required><br>
            <input type="text" name="wohnort" id="wohnort" required><br><br>
            <input type="submit" value="Absenden">
        </div>
    </div>
</form>

<hr>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $vorname = htmlspecialchars($_POST['vorname']);
        $nachname = htmlspecialchars($_POST['nachname']);
        $wohnort = htmlspecialchars($_POST['wohnort']);

        print "<p><b>$vorname $nachname</b> wohnt in <b>$wohnort</b>.</p>";
}
?>
</body>
</html>
