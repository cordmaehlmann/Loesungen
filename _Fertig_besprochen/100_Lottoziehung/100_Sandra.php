/*
* Lottoziehung
*
* Schreibe ein Programm, das sechs verschiedene
* Lottozahlen (6 aus 49) zieht und ausgibt.
*
* Hilfsmittel: Array, Schleife/Verzweigung, in_array()
*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lottozahlen des Tages</title>
    <style>
        div{
            border:5px solid;
            margin:20px;
            text-align:center;

        }
        h1{
            font-size:20px;
        }
        p{
            background-color: #ffcc00;
        }

    </style>
</head>
<body>
<div>


    <h1>Dein persönlicher Lottoschein</h1>
    <p>
        <?php
        $lottoschein=[6,7,8,33,41,49];
        $lottoziehung=[];

        foreach ($lottoschein as $lott)
        {
            echo $lott. '<br>';
        }
        ?>
    </p>
</div>

<div>
    <h1>Das Eurojackpot von Mittwoch</h1>
    <p>
        <?php
        $i=0;
        while($i<6) {
            $zufallszahlen = rand(1, 49);
            if (!in_array($zufallszahlen, $lottoziehung)) {
                $lottoziehung[] = $zufallszahlen;
                $i++;
            }

            echo $zufallszahlen . ' ';
        }
        ?>
    </p>
</div>


</body>
</html>