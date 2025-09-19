
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lieblingslottozahlen</title>

</head>
<body>

<h1>Lieblingslottozahlen</h1>
<P>
    Befülle ein Array mit deinen Liebingslottozahlen
    und gib sie per foreach als HTML-Liste aus.


</P>

<ul>
    <?php
    $favNums = [1, 12, 23, 34, 45, 49];
    foreach ($favNums as $index => $favNum) {
        echo '<li>' . $favNum . '</li>';
    }

    ?>
</ul>




</body>
</html>

