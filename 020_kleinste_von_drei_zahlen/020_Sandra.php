<?php
$variable1= rand(1,100);
$variable2= rand(1,100);
$variable3= rand(1,100);

print $variable1.' '.$variable2.' '.$variable3.'<br>';
if ($variable1< $variable2 && $variable1< $variable3)
{
    print"Die 1. Zufallszahl ist mit: $variable1 die kleinste Zahl";
}
elseif ($variable2< $variable1 && $variable2< $variable3)
{
    print"Die 2. Zufallszahl ist mit: $variable2 die kleinste Zahl";
}
else
{
    print"Die 3. Zufallszahl ist mit: $variable3 die kleinste Zahl";
}