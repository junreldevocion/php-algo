<?php


$b = 'b';
$a = 'a';

$temp = $a;
$a = $b;
$b = $temp;

echo "a: ".$a.", b:". $b;