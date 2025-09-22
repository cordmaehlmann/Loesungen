<?php

# Kopfrechnen

echo "Schreibe ein Programm, das dem Benutzer fünf Rechenaufgaben stellt.<br>";
echo "Welche Operatoren (+, -, *, %, /, **) jeweils benutzt werden,<br>";
echo "soll per Zufall ermittelt werden.<br>";
echo "Jede Zahl und jedes Ergebnis der Rechenaufgaben muss eine ganze,<br>";
echo "positive Zahl unter hundert sein.<br>";
echo "Wenn der Benutzer seine Ergebnisse absendet,<br>";
echo "soll ausgegeben werden, wie viele Ergebnisse richtig waren<br>";
echo "und wie lange der Benutzer gebraucht hat.:<br>";

session_start();

$operatoren = ['+', '-', '*', '%'];

if (isset($_POST['submit'])) {
    $start = $_SESSION['startzeit'];
    $dauer = time() - $start;
    $richtig = 0;

    for ($i = 0; $i < 5; $i++) {
        $aufgabe = $_SESSION['aufgaben'][$i];
        $user = intval($_POST['antwort'.$i]);

        switch ($aufgabe['op']) {
            case '+': $ergebnis = $aufgabe['a'] + $aufgabe['b']; break;
            case '-': $ergebnis = $aufgabe['a'] - $aufgabe['b']; break;
            case '*': $ergebnis = $aufgabe['a'] * $aufgabe['b']; break;
            case '%': $ergebnis = $aufgabe['a'] % $aufgabe['b']; break;
        }

        if ($user === $ergebnis) $richtig++;
    }

    echo "<h2>Du hattest $richtig von 5 Aufgaben richtig.</h2>";
    echo "<p>Du hast $dauer Sekunden gebraucht.</p>";
    echo "<p><a href=''>Nochmal versuchen</a></p>";
    exit;
}

// Aufgaben generieren
$aufgaben = [];
while (count($aufgaben) < 5) {
    $a = rand(1, 20); // kleine Zahlen, damit Multiplikation < 100
    $b = rand(1, 20);
    $op = $operatoren[array_rand($operatoren)];

    switch ($op) {
        case '+': $erg = $a + $b; break;
        case '-':
            if ($a < $b) continue 2; // kein negatives Ergebnis
            $erg = $a - $b; break;
        case '*':
            if ($a * $b > 99) continue 2;
            $erg = $a * $b; break;
        case '%':
            if ($b == 0 || $b > $a) continue 2;
            $erg = $a % $b; break;
    }

    $aufgaben[] = ['a'=>$a, 'b'=>$b, 'op'=>$op];
}

$_SESSION['startzeit'] = time();
$_SESSION['aufgaben'] = $aufgaben;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kopfrechnen-Rechenquiz</title>
</head>
<body>
<h1>Kopfrechnen-Rechenquiz</h1>
<form method="post">
    <?php foreach($aufgaben as $i => $aufgabe): ?>
        <p>
            Aufgabe <?= $i+1 ?>: <?= $aufgabe['a'] ?> <?= $aufgabe['op'] ?> <?= $aufgabe['b'] ?> =
            <input type="number" name="antwort<?= $i ?>" required>
        </p>
    <?php endforeach; ?>
    <input type="submit" name="submit" value="Ergebnisse prüfen">
</form>
</body>
</html>