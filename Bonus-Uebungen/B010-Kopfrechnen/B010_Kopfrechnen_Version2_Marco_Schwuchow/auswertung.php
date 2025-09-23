<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kopfrechnen – Auswertung</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="ordner" role="group" aria-label="Ordner mit Reitern">
    <div class="tabs" role="tablist" aria-label="Reiter">
        <div class="tab">&nbsp;</div>
        <div class="tab">&nbsp;</div>
        <div class="tab">Auswertung</div>
    </div>

    <div class="inhalt">
        <?php
        // Eingaben aus dem Formular
        $answers = $_POST['ans'] ?? [];   // <-- heißt bewusst $answers, wie in deinem Snippet
        $sol     = $_POST['sol'] ?? [];
        $zeit_start = isset($_POST['zeit_start']) && ctype_digit((string)$_POST['zeit_start'])
                ? (int)$_POST['zeit_start']
                : null;

        // Aufgaben-/Lösungsstruktur passend zu deinem Snippet rekonstruieren:
        // $aufgaben_loesungen[$i] = [<aufgabentext optional>, <loesung als string>]
        $aufgaben_loesungen = [];
        foreach ($sol as $i => $loes) {
            $aufgaben_loesungen[$i] = ['', (string)$loes];
        }

        // Deine Zähl-Logik 1:1
        $richtige_antworten = 0;
        for ($i = 0, $n = count($aufgaben_loesungen); $i < $n; $i++) {
            $loesung = (string)$aufgaben_loesungen[$i][1];
            $antwort = isset($answers[$i]) ? (string)$answers[$i] : '';
            if ($antwort === $loesung) {
                $richtige_antworten++;
            }
        }

        // Dauer in Sekunden (nur in Sekunden ausgeben)
        $dauer = 0;
        if ($zeit_start !== null) {
            $dauer = max(0, time() - $zeit_start);
        }

        // Ausgabe: genau zwei Zeilen
        ?>
        <p>Richtig: <?= (int)$richtige_antworten ?> / <?= (int)count($aufgaben_loesungen) ?><br>
            Dauer (Sekunden): <?= (int)$dauer ?></p>
        <p>Noch einen Versuch? Hier gehts zum <a href="index.php">Start</a>.</p>
    </div>
</div>
</body>
</html>
