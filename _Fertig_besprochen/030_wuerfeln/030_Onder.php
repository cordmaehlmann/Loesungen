<?php
/*
* Würfeln
*
* Würfel eine Zahl (von 1 bis 6) und gib aus,
* was gewürfelt wurde:
* Super, eine 6!
* Immerhin noch eine 5!
* Das reicht nicht! (bei 1-4)
*
* Hilfsmittel: rand(), Verzweigung
*/

$wuerfeln = rand(1, 6);
echo "Würfel: " . $wuerfeln . "\n";

if ($wuerfeln == 6) {
    echo "Super, eine " . $wuerfeln . "!";
}elseif ($wuerfeln == 5) {
    echo "Immerhin noch eine " . $wuerfeln . "!";
}elseif ($wuerfeln < 5) {
    echo "Das reicht nicht!";
}