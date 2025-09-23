<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body{
            font-size:20px;
            background-color:green;
            font-weight:bold;

        }
        h1{
            font-size:40px;
            color:darkgreen;
        }
    </style>
</head>
<body>
<h1>Meine Glücks Lottozahlen</h1>
<?php

/*
 * Liebingslottozahlen
 *
 * Befülle ein Array mit deinen Liebingslottozahlen
 * und gib sie per foreach als HTML-Liste aus.
 */

$lotto =[6,7,8,33,41,49];
foreach ($lotto as $lott){
    echo $lott. '<br>';
}
?>
<h1>Wer weiß, wohl in der nächsten Ziehung</h1>
