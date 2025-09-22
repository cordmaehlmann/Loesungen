

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kleines Einmaleins</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            padding: 4px 8px;
            text-align: center;

        }
        tr:nth-child(even) {
            background-color: silver;
        }


    </style>
</head>

<body>
<h1> Kleines Einmaleins</h1>
<p>
    /*
    * Kleines Einmaleins<br>
    *<br>
    * Schreibe ein Programm,<br>
    * welches das kleine Einmaleins formatiert ausgibt:<br>
    *<br>
    * 001 002 003 004 005 006 007 008 009 010<br>
    * 002 004 006 008 010 012 014 016 018 020<br>
    * 003 006 009 012 015 018 021 024 027 030<br>
    * 004 008 012 016 020 024 028 032 036 040<br>
    * 005 010 015 020 025 030 035 040 045 050<br>
    * 006 012 018 024 030 036 042 048 054 060<br>
    * 007 014 021 028 035 042 049 056 063 070<br>
    * 008 016 024 032 040 048 056 064 072 080<br>
    * 009 018 027 036 045 054 063 072 081 090<br>
    * 010 020 030 040 050 060 070 080 090 100<br>
    *<br>
    * Zusatz 1: Färbe jede 2. Zeile silber ein.<br>
    *<br>
    * Zusatz 2: Benutze für die Ausgabe eine HTML-Tabelle.<br>
    */<br>
</p>

<table border="1">
    <?php

    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
            $result = str_pad($i * $j, 3, '0',STR_PAD_LEFT);
            echo "<td>$result</td>";
        }
        echo "</tr>";
    }

    ?>

</table>


</body>
</html>