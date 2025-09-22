<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Lottozahlen</title>

</head>
<body>
<?php
/*
 * Liebingslottozahlen
 *
 * Befülle ein Array mit deinen Liebingslottozahlen
 * und gib sie per foreach als HTML-Liste aus.
 */
$lottozahlen =[3, 15, 4, 20, 36, 40];
echo "<ul>";
foreach ($lottozahlen as $lottozahl) {
    echo "<li>" . $lottozahl . "</li>";
}
echo "</ul>";

?>

</body>
</html>



