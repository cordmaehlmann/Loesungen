<!--
* Kleines Einmaleins
*
* Schreibe ein Programm,
* welches das kleine Einmaleins formatiert ausgibt:
*
* 001 002 003 004 005 006 007 008 009 010
* 002 004 006 008 010 012 014 016 018 020
* 003 006 009 012 015 018 021 024 027 030
* 004 008 012 016 020 024 028 032 036 040
* 005 010 015 020 025 030 035 040 045 050
* 006 012 018 024 030 036 042 048 054 060
* 007 014 021 028 035 042 049 056 063 070
* 008 016 024 032 040 048 056 064 072 080
* 009 018 027 036 045 054 063 072 081 090
* 010 020 030 040 050 060 070 080 090 100
*
* Zusatz 1: Färbe jede 2. Zeile silber ein.
*
* Zusatz 2: Benutze für die Ausgabe eine HTML-Tabelle.
*/
-->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kleines Einmaleins</title>
    <style>
        body{
            font-family: Broadway;
            font-size: 50px;
            color:black;
            background-color: bisque;
        }
        table{
            border: 5px solid black;
            border-collapse: collapse;
            border-color: orange;
            background-color: cornsilk;
        }
        td{
            border: 3px solid black;
            padding: 2px;
            border-color: orange;
        }
        .farbig{
            background-color: silver;
        }
        h1{
            border: 10px solid red;
            color: darkviolet;
            background-color: orange;
        }

    </style>
</head>
<body>
<center>
    <center><h1>Kleines Einmaleins</h1></center>

    <?php
    echo "<table>";
    for($i = 1; $i <= 10; $i++){
        if($i % 2 == 0){
            echo "<tr class='farbig'>";
        }else{
            echo "<tr>";
        }
        for($j = 1; $j<=10; $j++){
            $a=$i*$j;
            echo "<td>" . str_pad($a, 3, "0", STR_PAD_LEFT) . "&nbsp;" . "</td>";
        }echo "</tr>";
    }
    echo "</table>";

    ?>
</center>
</body>
</html>

