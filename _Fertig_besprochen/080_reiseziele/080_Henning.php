<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Reiseziele</title>
    <style>
        div {
            border: orangered 2px dotted;
            padding: 8px;
            width: 850px;
        }

        ol {
            list-style-type: upper-roman;
        }
    </style>
</head>
<body>
<title>Reiseziele</title>

<h2>Fülle ein Array mit deinen fünf Lieblingsreisezielen <br> und gib diese durchnummeriert aus.</h2>

<?php

$trvl_dest = ['nach Korfu', 'nach Thüringen', 'auf Cruises', 'auf psychonautics', "ins Tropical Islands"];
// $nr = 1;         // wenn (römische) Ziffern über HTML gewünscht, braucht es keinen CountUp

echo "<div>";
var_dump($trvl_dest);
echo "</div><br>";

echo "<div><ol>";
foreach ($trvl_dest as $trvl) {
    // echo "$nr. Endlich geht es wieder $trvl!<br>\n";     // auskommentiert, um HTML zu nutzen
    echo "<li>Endlich geht es wieder $trvl!</li><br>\n";
    // $nr++;                                               // auskommentiert, um HTML zu nutzen
}

echo "</ol></div><br>";
?>


</body>
</html>



