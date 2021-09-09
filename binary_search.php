<?php

// first we need to make sure that our list if already sorted
// or let's our list is sorted
// let' divide the array in two half, 
// then get the midIndex. create a condition that check
// if the midIndex value is equal to the target if true then return the midIdx;
// also create a condition that check the midIdx value if it is less than to the target if true
// then call the function itself, else call the function itself then add midIdx so that it will
// increment to the right index of an array.
// let's get coding :)

$list = [1,2,3,6,8,10,11,16];

$target = 11;

$found = binarySearch($list, 0, count($list) - 1, $target);

print_r($found);

function binarySearch($list, $start, $end,  $target) {

    $midIdx = floor(($start + $end) / 2); 

    $midEl = $list[$midIdx];

    echo $midEl;
    echo "\n";
     
    if ($target == $midEl) return $midIdx;

    if($target < $midEl) {
        return binarySearch($list, $start, $midIdx, $target);
    }else {
        return binarySearch($list, $midIdx, $end, $target);
    }

}
