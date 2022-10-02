<?php

function randomize($arr, $n)
{
    for ($i = $n - 1; $i >= 0; $i--) {
        $j = rand(0, $i+1);

        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
    }

    return $arr;
}

$arr = array(1, 2, 3, 4, 5, 6, 7, 8);
$n = count($arr);

$newArr = randomize($arr, $n);
print_r($newArr);
