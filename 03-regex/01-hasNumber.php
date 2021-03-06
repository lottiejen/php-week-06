<?php

// Create a function hasNumber, that returns true if the given string contains a digit.

require __DIR__ . "/vendor/autoload.php";

function hasNumber($str) {
    return preg_match("/\d/", $str) === 1; 
}

dump(hasNumber("blah")); // false
dump(hasNumber("bl3h")); // true
dump(hasNumber("bl3h5")); // true


// NOTES
// needs to return TRUE 
// preg_match - used to check if string matched regular expression. 