<?php
$wurf = rand(1, 6);

print "Gewürfelt: $wurf<br>";

if ($wurf > 5) {
    print "Super, eine 6!";
} elseif ($wurf > 4) {
    print "Immerhin noch eine 5!";
} else {
    print "Das reicht nicht!";
}
