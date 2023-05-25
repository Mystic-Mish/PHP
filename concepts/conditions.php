<?php

/*$var = 1001;
if($var % 2 == 0 && $var % 3 == 0) {
    echo "Divisible by both.";
} elseif ($var % 2 == 0) {
    echo "Divisible by 2";
} elseif ($var % 3 == 0) {
    echo "Divisible by 3";
} else {
    echo "Not divisible by either 2 or 3";
}
*/


$level = 3;
switch($level) {
    case 1: 
        echo "You ar playing at EASY level";
    break;
    case 2: 
        echo "You ar playing at MEDIUM level";
    break;
    case 3: 
        echo "You ar playing at HARD level";
    break;
    case 1: 
        echo "You ar playing at EXTREME level";
    break;
    default:
        echo "Invalid input";
}

?>