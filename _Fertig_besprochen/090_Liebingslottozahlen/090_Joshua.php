<?php

# Liebingslottozahlen

echo "Befülle ein Array mit deinen Liebingslottozahlen<br>";
echo "und gib sie per foreach als HTML-Liste aus.<br>";

$lottozahlen = [3, 7, 13, 27, 39, 47];

foreach ($lottozahlen as $zahl) {
    echo $zahl . " ";
}