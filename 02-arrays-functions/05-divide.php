<?php

// Create a function, divide, that takes two numbers as arguments. The function should return the first number divided by the second number.

require __DIR__ . "/vendor/autoload.php";

function divide($number, $denominator) {
return $number / $denominator ;
}

dump(divide(4, 2)); // 2
dump(divide(20, 2)); // 10
dump(divide(5, 2)); // 2.5
dump(divide(2.5, 0.5)); // 5

// create function called divide
// added arguements called $number & $denominator
// return -  which divides first number, by the second. 
// function returns: 2, 10, 2.5, 5.0 