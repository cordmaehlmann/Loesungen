<?php session_start();
//   unset($_SESSION['zeit_start'], $_SESSION['aufgaben_loesungen']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kopfrechnen</title>
    <style>
        body {
            margin: 20px;
            font-family: Arial;
            background: lightblue;
            color: royalblue;
        }

        .hauptcontainer {
            max-width: 80%;
            padding: 0 20px 20px 20px;
            background: #ffffff;
            border: 1px solid darkblue;
            border-radius: 5px;
        }

        button {
            background: #1d5bbf;
            color: #fff;
            border: none;
            padding: 8px 14px;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
        button:hover { background: #174a99; }

        table {
            width: 80%;
            border-collapse: collapse;
            border: 1px solid #c9ddff;
            margin: 12px 0;
        }
        th {
            text-align: left;
            background: #e9f2ff;
            color: #24364d;
            padding: 10px;
            border-bottom: 1px solid #c9ddff;
        }
        td {
            padding: 10px;
            border-top: 1px solid #e3eeff;
        }

        .aufgabe {
            width: 30%;
            text-align: right;
        }

        input[type="text"] {
            width: 80%;
            padding: 8px;
            border: 1px solid #c9ddff;
            border-radius: 4px;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #1d5bbf;
            box-shadow: 0 0 0 2px rgba(29,91,191,0.15);
        }
    </style>
</head>
<body>
<div class="hauptcontainer">
<h2>Kopfrechnen</h2>
<?php
/*
 * Kopfrechnen
 *
 * Schreibe ein Programm, das dem Benutzer fünf Rechenaufgaben stellt.
 *
 * Welche Operatoren (+, -, *, %, /, **) jeweils benutzt werden,
 * soll per Zufall ermittelt werden.
 * Jede Zahl und jedes Ergebnis der Rechenaufgaben muss eine ganze,
 * positive Zahl unter hundert sein.
 *
 * Wenn der Benutzer seine Ergebnisse absendet,
 * soll ausgegeben werden, wie viele Ergebnisse richtig waren
 * und wie lange der Benutzer gebraucht hat.
 */

$aufgaben_loesungen = [];
$richtige_antworten = 0;
$zeit_start = null;
$zeit_ende = null;

// <<< Änderung: REQUEST_METHOD sicher lesen >>>
$method = $_SERVER['REQUEST_METHOD'] ?? '';

function plus(): array {
    $summe = random_int(2, 99);
    $a = random_int(1, $summe - 1);
    $b = $summe - $a;
    $aufgabe  = "$a + $b";
    $ergebnis = (string)$summe;
    return [$aufgabe, $ergebnis];
}
function minus(): array {
    $a = random_int(2, 99);
    $b = random_int(1, $a - 1);
    return ["$a - $b", (string)($a - $b)];
}
function mal(): array {
    do {
        $a = random_int(2, 12);
        $b = random_int(2, 12);
        $prod = $a * $b;
    } while ($prod >= 100);
    return ["$a * $b", (string)$prod];
}
function geteilt(): array {
    $divisor = random_int(2, 9);
    $quot    = random_int(2, intdiv(99, $divisor));
    $dividend = $divisor * $quot;
    return ["$dividend / $divisor", (string)$quot];
}
function prozent(): array {
    do {
        $basis = random_int(2, 200);
        $prozentsatz = random_int(1, 99);
    } while (!(($basis * $prozentsatz) % 100 === 0
            && ($erg = intdiv($basis * $prozentsatz, 100)) > 0
            && $erg < 100));
    $erg = $basis / 100 * $prozentsatz;
    return ["$prozentsatz % von $basis", (string)$erg];
}
function hochzahl(): array {
    do {
        $a = random_int(2, 9);
        $b = random_int(2, 4);
        $pow = $a ** $b;
    } while ($pow >= 100);
    return ["$a ^ $b", (string)$pow];
}

// Aufgaben erstellen
for ($i = 0; $i < 5; $i++) {
    // Auswahl der Rechenart
    $rechenart = random_int(1, 6);
    switch ($rechenart) {
        case 1: $aufgaben_loesungen[$i] =  plus(); break;
        case 2: $aufgaben_loesungen[$i] =  minus(); break;
        case 3: $aufgaben_loesungen[$i] =  mal();  break;
        case 4: $aufgaben_loesungen[$i] =  geteilt(); break;
        case 5: $aufgaben_loesungen[$i] =  prozent(); break;
        case 6: $aufgaben_loesungen[$i] =  hochzahl(); break;
        default: echo "Unbekannte Rechenart: " . $rechenart;
    }
}
// NUR DEBUG, für Betrieb auskommentieren
// for ($i = 0; $i < 5; $i++) {
//    echo $aufgaben_loesungen[$i][0] . " = " . $aufgaben_loesungen[$i][1] . "<br>";
// }

// <<< Änderung: hier und unten $method verwenden >>>
if ($method === 'POST' && ($_POST['action'] ?? '') === 'start') {
    $_SESSION['aufgaben_loesungen']   = $aufgaben_loesungen;
    $zeit_start = time();
    $_SESSION['zeit_start'] = $zeit_start;
    $_SESSION['runde_id'] = bin2hex(random_bytes(8));
    // echo $zeit_start;
    tabelle_erzeugen($aufgaben_loesungen);
}

// Tabelle mit den Aufgaben, neben jeder Aufgabe ein Eingabefeld für die Antworten,
// Tab weiterschaltung zwischen den Eingabefeldern muss funktionieren
function tabelle_erzeugen($al): void
{
    echo '<form method="post">';
    echo '  <input type="hidden" name="runde_id" value="' . ($_SESSION['runde_id'] ?? '') . '">';
    echo '  <table>';
    echo '    <thead><tr><th>Aufgabe</th><th>Deine Antwort</th></tr></thead>';
    echo '    <tbody>';

    foreach ($al as $i => $pair) {
        $aufgabe = (string)$pair[0];
        echo '      <tr>';
        echo '        <td class="aufgabe">' . $aufgabe . '</td>';
        echo '        <td><input type="text" name="ans[' . $i . ']" autocomplete="off" inputmode="numeric" tabindex="' . ($i + 1) . '"></td>';
        echo '      </tr>';
    }

    echo '    </tbody>';
    echo '  </table>';
    echo '  <button type="submit" name="action" value="finish">Fertig</button>';
    echo '</form>';
}

if ($method === 'POST' && ($_POST['action'] ?? '') === 'finish') {
    $runde_ok = isset($_POST['runde_id'], $_SESSION['runde_id']) && hash_equals((string)$_SESSION['runde_id'], (string)$_POST['runde_id']);
    $zeit_ende  = time();
    $zeit_start = $_SESSION['zeit_start'] ?? null;
    $answers = $_POST['ans'] ?? [];
    $aufgaben_loesungen = $_SESSION['aufgaben_loesungen'] ?? [];
    if ($zeit_start === null || !$runde_ok || !is_array($aufgaben_loesungen) || count($aufgaben_loesungen) === 0) {
        echo 'Fehler: Keine gültige Runde gefunden (Session leer, abgelaufen oder ungültige Runden-ID).';
    } else {
        // Dynamisch über die vorhandenen Aufgaben iterieren
        for ($i = 0, $n = count($aufgaben_loesungen); $i < $n; $i++) {
            $loesung = (string)$aufgaben_loesungen[$i][1];
            $antwort = isset($answers[$i]) ? (string)$answers[$i] : '';
            if ($antwort === $loesung) {
                $richtige_antworten++;
            }
        }
        auswertung($richtige_antworten, $zeit_ende - $zeit_start);
    }
    unset($_SESSION['zeit_start'], $_SESSION['aufgaben_loesungen'],$_SESSION['runde_id']);
}

// Auswertung, Anzahl richtige Antworten, Gesamtzeit in Sekunden anzeigen (zeit_ende - zeit_anfang)
function auswertung($ra, $z): void
{
    echo 'Richtige Antworten: ' . $ra . '<br>';
    echo 'Benötigte Zeit: ' . $z . ' Sekunden<br>';
}

if (!isset($_SESSION['zeit_start'])): ?>
    <form method="post">
        <button type="submit" name="action" value="start">Start</button>
    </form>
<?php endif; ?>

</div>
</body>
</html>
