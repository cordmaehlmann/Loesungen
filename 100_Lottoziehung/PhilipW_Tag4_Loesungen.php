<?php

// Aufgabe 1
$j = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i%3 == 0 OR $i%7 == 0) {
        print "$i ";
        $j++;
    }
}
print "<br> $j <br>";


// Aufgabe 2
$lebensmittel = ['Banane', 'Apfel', 'Birne', 'Karotte', 'Tomate', 'Gurke', 'Kartoffel'];

$nummer = rand(0, count($lebensmittel) - 1);

switch ($nummer) {
    case 0:case 1:case 2:case 4:case 5:
        print "$lebensmittel[$nummer] ist botanisch eine Frucht";
        break;
    case 3:case 6:
        print "$lebensmittel[$nummer] ist botanisch ein Gemüse";
}
print "<br>";


// Aufgabe 3
$reiseziele = ['London','Prag','Kyjiw','Tokyo','Aotearoa'];
foreach ($reiseziele as $key => $value) {
    print ($key+1) . " : $value <br>";
}
?>


<!-- Aufgabe 4 -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Lieblingslottozahlen</title>
    <style>
        ul{ list-style-type: square;    }
    </style>
</head>
<body>
<?php
$lieblingszahlen = ['12','24','25','36','37','42'];

foreach ($lieblingszahlen as $key => $value) {  ?>
    <ul>
        <li>
        <?php   print $value;   ?>
        </li>
    </ul>
<?php   }   ?>
</body>


<?php
// Aufgabe 5
//$zahlen = range(1,49);
$lottozahlen = [];

//for ($i = 0; $i < 6; $i++) {
//    $los = rand(0, count($zahlen) - 1);
//    $lottozahlen[] = $zahlen[$los];
//    array_splice($zahlen,$los, 1);
//}

while(count($lottozahlen)<6){
    $los = rand(1, 49);
    if (!in_array($los, $lottozahlen)) {
        $lottozahlen[] = $los;
    }
}

print 'Die heutigen Lottozahlen sind die: ';
foreach ($lottozahlen as $key => $value) {
    print "$value ";
}
