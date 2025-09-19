<?php
/*
 * Reiseziele
 *
 * Fülle ein Array mit deinen fünf Lieblingsreisezielen
 * und gib diese durchnummeriert aus.
 *
 * Hilfsmittel: Array, foreach
 */
$nummer = 0;
$reiseziele = ['Mallorca', 'Rom', 'Istanbul', 'Tokio', 'Nordlichter'];
foreach($reiseziele as $reiseziel){
    $nummer ++;
    echo "$nummer. $reiseziel \n";
}