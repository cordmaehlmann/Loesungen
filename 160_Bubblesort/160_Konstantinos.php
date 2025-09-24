<?php

$arr = [2, 5, 82, 46, 52, 82, 41, 33, 66];

function bubbleSort($arr)
{
    $arrs = sizeof($arr);

    for ($i = 0; $i < $arrs - 1; $i++) {
        $swapped = false;
        for ($j = 0; $j < $arrs - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $x = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $x;
                $swapped = true;
            }
        }
        // If no swaps happened, array is sorted
        if (!$swapped) {
            break;
        }
    }

    return $arr;
}

$sortedArr = bubbleSort($arr);
var_dump($sortedArr);
?>


