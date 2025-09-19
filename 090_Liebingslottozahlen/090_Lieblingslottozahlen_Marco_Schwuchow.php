<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lieblingslottozahlen</title>
</head>
<body>
<h2>Lieblingslottozahlen</h2>
<?php
/*
 * Liebingslottozahlen
 *
 * Befülle ein Array mit deinen Liebingslottozahlen
 * und gib sie per foreach als HTML-Liste aus.
 */

$lottozahlen = ['6','16','26','36','46','49'];

echo "<ol>";
foreach ($lottozahlen as $zahl) {
    echo "<li>$zahl</li>";
}
echo "</ol>";
?>
</body>
</html>