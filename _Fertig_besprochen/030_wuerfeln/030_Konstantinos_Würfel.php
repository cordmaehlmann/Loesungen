<?php

$wurfel = rand(1,6);

if ($wurfel == 6) {
    print("Super ,eine $wurfel!");
}
elseif ($wurfel == 5) {
    print("Immerhin noch eine $wurfel!");
}
else {
    print("Das reicht nicht!");
}
