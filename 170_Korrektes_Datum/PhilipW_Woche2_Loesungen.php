<?php
// Aufgabe 110
function checkUnique($array):bool{
    $check = 0;
    for($i = 0; $i < count($array); $i++){
        for($j = 0; $j < count($array); $j++){
            if($array[$i] == $array[$j] AND $i != $j){
                $check++;
            }
        }
    }
    if($check > 0){     return false;   }
    else{   return true;    }
}

$array = [];
for($i=0; $i<10; $i++){
    $array[$i] = rand(0,10);
}
echo checkUnique($array);

foreach ($array as $arr){
    echo $arr . " ";
}


// Aufgabe 120
$i = 0;
$array = [];
$found = [];
while($i < 5){
    $value = rand(0,10);
    if(!in_array($value, $array)){
        $array[2*$i] = $value;
        $array[2*$i+1] = $value;
        $i++;
    }
}
unset($array[count($array)-1]);         // array_pop($array);

for($i = 0; $i < count($array); $i++){
    $check = 0;
    for($j = 0; $j < count($array); $j++){
        if($array[$i] == $array[$j] AND $i != $j){
            $check++;
        }
    }
    if($check == 0){
        $found[] = $array[$i];
    }
}

echo "<br>";
foreach ($array as $arr){
    echo $arr . " ";
}
echo "<br> Einzelne Zahlen im Array: ";
foreach($found as $unique){
    echo $unique . " ";
}
echo '<br>';

// Aufgabe 130
$konsonanten = ['b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z'];
$vokale = ['a','e','i','o','u'];
$sonder = ['+','-','*','/','^','°',',',';','.',':','-','_','#',"'",'*','~','!','"','§','$','%','&','=','?'];
$zahlen = ['0','1','2','3','4','5','6','7','8','9'];
$passwort = [];

for ($i=0; $i<rand(4,6); $i++){
    if($i%2==0){
        if ($i == 0){
            $passwort[] = ucfirst($konsonanten[array_rand($konsonanten)]);
        }
        else {
            $passwort[] = $konsonanten[array_rand($konsonanten)];
        }
    }
    else{
        $passwort[] = $vokale[array_rand($vokale)];
    }
}
$passwort[] = $sonder[array_rand($sonder)];

for ($i=0; $i<rand(1,3); $i++){
    $passwort[] = $zahlen[array_rand($zahlen)];
}

foreach($passwort as $pass){
    echo $pass . " ";
}
echo "<br>";


// Aufgabe 140
$zahl = rand(1,100);
$summe = 0;
$teiler = [];

for ($i=1; $i<$zahl; $i++){
    if($zahl%$i == 0){
        $summe += $i;
        $teiler[] = $i;
    }
}
if($zahl > $summe){
    echo "Die Zahl $zahl ist größer als ihre Teilersumme $summe. <br>";
}
elseif($zahl < $summe){
    echo "Die Zahl $zahl ist kleiner als ihre Teilersumme $summe. <br>";
}
else{
    echo" Die Zahl $zahl und ihre Teilersumme $summe sind exakt gleich groß. <br>";
}

echo " Das sind die einzelnen Teiler: ";
foreach ($teiler as $teil){
    echo $teil . " ";
}



// Aufgabe 150
$standard = 26;
$minderjaehrig = 30;
$oldies = 28;
$behinderung = 5;
$langzeit = 2;

$mitarbeiter = array(
    0 => array('id' => '1', 'alter' => 0, 'behinderung' => 0, 'urlaub' => 0, 'betriebszugehörigkeit' => 0),
    1 => array('id' => '2', 'alter' => 0, 'behinderung' => 0, 'urlaub' => 0, 'betriebszugehörigkeit' => 0),
    2 => array('id' => '3', 'alter' => 0, 'behinderung' => 0, 'urlaub' => 0, 'betriebszugehörigkeit' => 0),
    3 => array('id' => '4', 'alter' => 0, 'behinderung' => 0, 'urlaub' => 0, 'betriebszugehörigkeit' => 0),);

// Zufallsdaten erstellen
for($i=0; $i<count($mitarbeiter); $i++){
    $mitarbeiter[$i]['alter'] = rand(15,65);
    $mitarbeiter[$i]['behinderung'] = rand(0, 60);
    $mitarbeiter[$i]['betriebszugehörigkeit'] = rand(0, $mitarbeiter[$i]['alter']-15);
}

for($i=0; $i<count($mitarbeiter); $i++){
    if($mitarbeiter[$i]['alter'] < 18){
        $mitarbeiter[$i]['urlaub'] = $minderjaehrig;
    }
    elseif($mitarbeiter[$i]['alter'] >= 55){
        $mitarbeiter[$i]['urlaub'] = $oldies;
    }
    else{
        $mitarbeiter[$i]['urlaub'] = $standard;
    }
    if($mitarbeiter[$i]['behinderung'] > 50){
        $mitarbeiter[$i]['urlaub'] += $behinderung;

    }
    if($mitarbeiter[$i]['betriebszugehörigkeit'] >= 10){
        $mitarbeiter[$i]['urlaub'] += $langzeit;
    }
}
var_dump($mitarbeiter);


// Aufgabe 160
$array = [];
$speicher = 0;
$j = 0;

for($i=0; $i<10; $i++){
    $array[$i] = rand(0,20);
}

do{
    $j = 0;
    for ($i=0; $i<count($array)-1; $i++){
        if($array[$i] > $array[$i+1]){
            $speicher = $array[$i];
            $array[$i] = $array[$i+1];
            $array[$i+1] = $speicher;
            $j++;
        }
    }
    print_r($array);
} while($j != 0);
echo "<br> ";
print_r($array);
echo "<br> ";


// Aufgabe 170
$tage = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
$monate = 12;

// Datum kreieren
$datum = array(0 => array('tag' => rand(0,40),'monat' => rand(0,15),'jahr' => rand(1900,2200)),
    1 => array('tag' => rand(0,40),'monat' => rand(0,15),'jahr' => rand(1900,2200)),
    2 => array('tag' => rand(0,40),'monat' => rand(0,15),'jahr' => rand(1900,2200)),
    3 => array('tag' => rand(0,40),'monat' => rand(0,15),'jahr' => rand(1900,2200)),
    4 => array('tag' => rand(0,40),'monat' => rand(0,15),'jahr' => rand(1900,2200)),
    5 => array('tag' => rand(0,40),'monat' => rand(0,15),'jahr' => rand(1900,2200)),
    6 => array('tag' => rand(0,40),'monat' => rand(0,15),'jahr' => rand(1900,2200)),
    7 => array('tag' => rand(0,40),'monat' => rand(0,15),'jahr' => rand(1900,2200)),
    8 => array('tag' => rand(0,40),'monat' => rand(0,15),'jahr' => rand(1900,2200)),
    9 => array('tag' => rand(0,40),'monat' => rand(0,15),'jahr' => rand(1900,2200)),
    );

for($i=0; $i<count($datum); $i++){
    if($datum[$i]['jahr'] >= 1900 AND $datum[$i]['jahr'] <= 2100) {
        if ($datum[$i]['monat'] > 0 and $datum[$i]['monat'] < $monate) {
            if ($datum[$i]['tag'] > 0 and $datum[$i]['tag'] <= $tage[$datum[$i]['monat'] - 1]) {
                print_r($datum[$i]);
                echo "Datum ist korrekt. <br>";
            }
            elseif ($datum[$i]['tag'] == 29 and $datum[$i]['jahr'] % 4 == 0 and ($datum[$i]['jahr'] % 100 != 0 or $datum[$i]['jahr'] % 400 == 0)) {
                print_r($datum[$i]);
                echo "Datum ist korrekt. <br>";
            }
            else {
                echo "Datum ist nicht korrekt. <br>";
            }
        }
        else {
            echo "Datum ist nicht korrekt. <br>";
        }
    }
    else{
        echo "Datum ist nicht korrekt. <br>";
    }
}