<?php

/*
 * Urlaubsanspruch
 *
 * Für die Bestimmung des Urlaubsanspruchs der Beschäftigten einer Firma
 * soll ein Programm entwickelt werden.
 * Die Grundlage für die Berechnung des Urlaubsanspruchs
 * bildet die Betriebsvereinbarung.
 * Das Programm soll die Anzahl der Urlaubstage für
 * jeweils einen Beschäftigten berechnen.

 * Betriebsvereinbarung:
 * Allen Beschäftigten stehen 26 Tage Urlaub zu.
 * Minderjährige Beschäftigte erhalten 30 Tage Urlaub.
 * Beschäftigte, die älter als 55 Jahre sind, erhalten 28 Tage Urlaub.
 * Beschäftigte mit einer Behinderung ab 50 % erhalten
 * zusätzlich 5 weitere Tage Urlaub.
 * Beschäftigte mit einer Betriebszugehörigkeit von mehr als 10 Jahren
 * erhalten 2 zusätzliche Tage Urlaub.
 */

function berechneUrlaubstage(int $alter, int $behinderungProzent, float $betriebszugohoerigkeitJajre  ):int
{
    if ($alter < 18) {
        $urlaub = 30;
    } elseif ($alter > 55) {
        $urlaub = 28;
    } else {
        $urlaub = 26;
    }

    if ($behinderungProzent >= 50) {
        $urlaub += 5;
    }

    if ($betriebszugohoerigkeitJajre > 10) {
        $urlaub +=2;
    }
    return $urlaub;
}

$urlaubstage = null;
if ($_SERVER ["REQUEST_METHOD"] === "POST") {
    $alter = (int)$_POST['alter'];
    $behinderung = (int) $_POST['behinderung'];
    $jahre =(float) $_POST['jahre'];
    $urlaubstage = berechneUrlaubstage($alter, $behinderung, $jahre);
}
?>

<!DOCTYPE html>
<html lang = "de">
<head>
    <meta charset="UTF-8">
    <title>Urlaubsanspruch berechnen</title>
</head>
<body>
    <h2>Urlaubsanspruch berechnen</h2>
<form method="post">
    <label> Alter: <input type ="number" name="alter" required></label><br><br>
    <lable> Grad der Behinderung (%): <input type ="number" name="behinderung" required></lable><br><br>
    <lable> Betriebszugehörigkeit (Jahre): <input type="number" step="0.1" name="jahre" required></lable><br><br>
    <button type="submit">Berechnen</button>

</form>
<?php if ($urlaubstage !==null):?>
    <h3>Ergebnis:</h3>
    <p>Der Urlaubsanspruch beträgt: <strong> <?php echo $urlaubstage; ?> Tage </strong></p>
<?php endif;?>

</body>
</html>



