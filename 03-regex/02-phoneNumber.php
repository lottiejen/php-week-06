<?php

// Create a function, mi5, that returns true if the given string is 00 followed by a digit. Make sure it returns a boolean value:

require __DIR__ . "/vendor/autoload.php";

function mi5($string) {
    return preg_match("/00\d/", $string) === 1;
}

dump(mi5("007")); // true
dump(mi5("oo8")); // false
dump(mi5("003")); // true
dump(mi5("M")); // false


// create function mi5
// use preg_match to match if string is 00 w/ a digit  ~ ~ (add 00, d )