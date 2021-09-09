<?php

echo "\n\n";
// create users input list of numbers separated by spaces
$input = readline('Input list of numbers: ');
echo "\n\n";
// split the input into an array by using explode function 
$input = explode(' ', $input);

// time complexity = 0(n);
// space complexity = 0(n + n)
$new_input = checkInput($input);

// sorted list numbers
$output = sortedList($new_input);

echo "sorted list: ".$output;

echo "\n\n";

// 5 4 6 1 2
// 0 1 2 3 4
function sortedList($list) {

    for($i = 1; $i < count($list); $i++) {
        $current = $list[$i]; // current = 4, current = 6, current = 1
        $j = $i - 1; // j = 1 - 1 = 0, j = 2 - 1 = 1, j = 3 - 1 = 2,
        

        // 0 >= 0 && 5 > 4 true
        // 1 >= 0 && 4 > 6 false
        // 2 >= 0 && 6 > 1 true
        while($j >= 0 && $list[$j] > $current) {
            $list[$j + 1] = $list[$j]; // list[0 + 1] = 5, list[2 + 1] = 6
            $j--; // 0, 1
        }

        $list[$j + 1] = $current; // list[0 + 1] = 4, 
                                  // list[1 + 1] = 6,
                                  // list[1 + 1] = 1
        print_r($list);
        
        // list[5 4 6 1 2]
        // list[5 4 6 1 2]
        // list[5 4 1 1 2]
    }

    return implode(' ', $list);
}

// check if list of numbers is valid and then return the list 
// else exit the code and disply error message
function checkInput($input) {

    $filtered_input = [];

    foreach($input as $k => $v) {
        if(is_numeric($v)) {
            $filtered_input[] = $v;
        }else {
            if ($v !== '') {
                echo "You have inputed an non numeric value!";
                exit;
            }
            continue;
        }
    }

    return $filtered_input;
}






