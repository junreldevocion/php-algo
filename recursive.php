<?php


$num = 4;

$sum = recursive($num);

echo $sum;

function recursive($num) {

    if($num != 0) {
        return $num + recursive($num -1);
    }
}