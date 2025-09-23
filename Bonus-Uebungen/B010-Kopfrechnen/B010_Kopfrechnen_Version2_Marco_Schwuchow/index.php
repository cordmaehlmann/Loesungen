<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kopfrechnen</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="ordner" role="group" aria-label="Ordner mit Reitern">
    <div class="tabs" role="tablist" aria-label="Reiter">
        <div class="tab">Start</div>
        <div class="tab">&nbsp;</div>
        <div class="tab">&nbsp;</div>
    </div>

    <div class="inhalt">
        <p>
        Zum Beginn deiner Rechenübung drücke START.
        </p>
        <form action="rechnen.php" method="post">
            <button type="submit" name="action" value="start">Start</button>
        </form>
    </div>
</div>
</body>
</html>