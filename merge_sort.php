<?php

$list = [10,1,2,4,3,5,7,11];

$sorted = mergeSort($list);

print_r($sorted);

function mergeSort($list) {
    if (count($list) == 1) return $list;

    $midIdx = round(count($list) / 2);

    $left = array_slice($list, 0, $midIdx);
    $left = mergeSort($left);
    $right = array_slice($list, $midIdx);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {

    $list = [];

    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] > $right[0]) {
            $list[] = $right[0];
            $right = array_slice($right, 1);
        }else {
            $list[] = $left[0];
            $left = array_slice($left, 1);
        }

    }
    
    while(count($left) > 0) {
        $list[] = $left[0];
        $left = array_slice($left, 1);
    }

    while(count($right) > 0) {
        $list[] = $right[0];
        $right = array_slice($right, 1);
    }

    return $list;
}