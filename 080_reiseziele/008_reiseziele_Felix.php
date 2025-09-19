<?php

/*
 * Reiseziele
 *
 * Fülle ein Array mit deinen fünf Lieblingsreisezielen
 * und gib diese durchnummeriert aus.
 *
 * Hilfsmittel: Array, foreach
 */


$travelDest = ['Hawaii', 'Thailand', 'China', 'Japan', 'California'];

foreach ($travelDest as $index => $dest) {
    echo ($index + 1) . '. ' . $dest . '<br>';
}