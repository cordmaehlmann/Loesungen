<?php

/*
 * Obst oder Gemüse
 *
 * Fülle EIN (nummerisches, eindimensionales) Array
 * mit Apfel, Birne, Kartoffel, Karotte und Banane.
 * Lies per Zufall ein Element des Arrays aus
 * und gib an, ob es sich um Obst oder Gemüse handelt.
 *
 * Hilfsmittel: array, rand(), switch-case
 *
 * Zusatz 1: Die Reihenfolge im Array soll beliebig veränderbar sein
 * Zusatz 2: Die Wörter Obst & Gemüse sollen im Quellcode
 *           nur je einmal benutzen.
 *           Wenn die beiden Wörter in einer Variablen gespeichert werden,
 *           darf auch diese nur an einer Stelle ausgegeben oder zugewiesen werden.
 */

$array = ['Apfel','Birne','Kartoffel','Karotte','Banana'];



    $x=rand(0,4);
        switch ($x) {
            case 0:
                echo $array[0].' ist ein Obst';
                break;
            case 1:
                echo $array[1].' ist ein Obst';
                break;
            case 2:
                echo $array[2] .' ist ein Gemüse';
                break;
            case 3:
                echo $array[3] .' ist ein Gemüse';
                break;
            case 4:
                echo $array[4].' ist ein Obst ';
                break;

    }



