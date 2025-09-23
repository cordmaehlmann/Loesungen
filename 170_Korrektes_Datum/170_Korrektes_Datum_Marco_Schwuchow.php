<?php

/*
 * Korrektes Datum
 *
 * Die Meyer GmbH benötigt ein Modul,
 * das ein Datum auf Korrektheit prüft.
 * Ist das zu prüfende Datum korrekt,
 * so ist die Variable $datok auf 1, andernfalls auf 0
 * zu setzen.
 *
 * Beispiele:
 *
 * 29.02.1999 - $datok: 0
 * 29.02.2000 - $datok: 1
 * 13.05.2000 - $datok: 1
 * 32.05.2000 - $datok: 0
 * 24.13.2000 - $datok: 0
 *
 * Für die Jahre gilt: $jahr > 1900 && $jahr < 2100
 */

$dataok = 0;

function is_schaltjahr($jahr) {
    if ($jahr % 4 == 0) {
        if ($jahr % 100 == 0) {
            if ($jahr % 400 == 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    } else {
        return false;
    }
}

function pruefe_datum($datum) {
    global $dataok;
    $teile = explode('.', $datum);
    $tag = intval($teile[0]);
    $monat = intval($teile[1]);
    $jahr = intval($teile[2]);

    $dataok = 0;

    if (($jahr > 1900) && ($jahr < 2100)) {
        if (($monat >= 1) && ($monat <= 12)) {
            switch ($monat) {
                case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                if (($tag >= 1) && ($tag <= 31)) {$dataok = 1; }
                break;
                case 4: case 6: case 9: case 11:
                if (($tag >= 1) && ($tag <= 30)) {$dataok = 1; }
                break;
                case 2:
                    if (($tag >= 1) && ($tag <= 28)) {
                        $dataok = 1;
                    }
                    if (is_schaltjahr($jahr) && ($tag == 29)) {
                        $dataok = 1;
                    }
                    break;
            }
        }
    }
}

pruefe_datum("29.02.1999"); echo "29.02.1999 dataok: " . $dataok . " \n";
pruefe_datum("29.02.2000"); echo "29.02.2000 dataok: " . $dataok . " \n";
pruefe_datum("13.05.2000"); echo "13.05.2000 dataok: " . $dataok . " \n";
pruefe_datum("32.05.2000"); echo "32.05.2000 dataok: " . $dataok . " \n";
pruefe_datum("24.13.2000"); echo "24.13.2000 dataok: " . $dataok . " \n";

?>