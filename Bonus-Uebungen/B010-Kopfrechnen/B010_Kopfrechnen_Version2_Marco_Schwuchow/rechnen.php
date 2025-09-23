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
        <div class="tab">&nbsp;</div>
        <div class="tab">Kopfrechnen</div>
        <div class="tab">&nbsp;</div>
    </div>

    <div class="inhalt">
        <?php
        // --- Aufgabengeneratoren ---
        function plus(): array {
            $summe = random_int(2, 99);
            $a = random_int(1, $summe - 1);
            $b = $summe - $a;
            return ["$a + $b", (string)$summe];
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
                $erg = intdiv($basis * $prozentsatz, 100);
            } while (!(($basis * $prozentsatz) % 100 === 0 && $erg > 0 && $erg < 100));
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

        // --- Aufgaben erzeugen ---
        $aufgaben_loesungen = [];
        for ($i = 0; $i < 5; $i++) {
            switch (random_int(1, 6)) {
                case 1: $aufgaben_loesungen[$i] = plus();     break;
                case 2: $aufgaben_loesungen[$i] = minus();    break;
                case 3: $aufgaben_loesungen[$i] = mal();      break;
                case 4: $aufgaben_loesungen[$i] = geteilt();  break;
                case 5: $aufgaben_loesungen[$i] = prozent();  break;
                case 6: $aufgaben_loesungen[$i] = hochzahl(); break;
            }
        }

        $zeit_start = time();
        ?>

        <!-- Formular geht DIREKT an auswertung.php -->
        <form method="post" action="auswertung.php">
            <input type="hidden" name="zeit_start" value="<?= htmlspecialchars((string)$zeit_start, ENT_QUOTES) ?>">
            <table>
                <thead><tr><th>Aufgabe</th><th>Deine Antwort</th></tr></thead>
                <tbody>
                <?php foreach ($aufgaben_loesungen as $i => $pair): ?>
                    <tr>
                        <td class="aufgabe"><?= htmlspecialchars((string)$pair[0], ENT_QUOTES) ?></td>
                        <td>
                            <input type="text" name="ans[<?= $i ?>]" autocomplete="off" inputmode="numeric" tabindex="<?= $i+1 ?>">
                            <!-- Lösung für diese Aufgabe mitschicken -->
                            <input type="hidden" name="sol[<?= $i ?>]" value="<?= htmlspecialchars((string)$pair[1], ENT_QUOTES) ?>">
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <button type="submit" name="action" value="finish">Fertig</button>
        </form>
    </div>
</div>
</body>
</html>
