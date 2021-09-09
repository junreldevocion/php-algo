<?php

echo "\n\n";
// create users input list of numbers separated by spaces
$input = readline('Input list of numbers: ');

echo "\n\n";
// split the input into an array by using explode function 
$input = explode(' ', $input);

$new_input = checkInput($input);

// sorted list numbers
$output = sortList($new_input);

echo "sorted list: ".$output;

echo "\n\n";


// create a first loop that loop base on the size of an array
// and then create a second loop that start with next element of an array
// and inside this loop create a condition that check if the current value of the second loop
// is less than to the value of the first loop if true, then swap the value
// the time complexity of this is O(n^2)
// and the space complexity is O(n)
function sortList($list) {

    for($i = 0; $i < count($list); $i++) { 
        
        for ($j=1; $j < count($list) - $i; $j++) { 
            if ($list[$j] < $list[$j - 1] ) {

                $temp = $list[$j]; 
                $list[$j] = $list[$j - 1]; 
                $list[$j - 1] = $temp;
            }

        }
    }

    return implode(' ', $list);
}

// check if list of numbers is valid and then return the list 
// else exit the code and disply error message
// the time complexity here is O(n)
// and the space complexity is O(Log(n))
function checkInput($input) {

    $filtered_input = array();

    foreach($input as $k => $v) {
        if(is_numeric($v)) {
            $filtered_input[] = $v;
        }else {
            if ($v) {
                echo "You have inputed an non numeric value!";
                exit;
            }
        }
    }

    return $filtered_input;
}






