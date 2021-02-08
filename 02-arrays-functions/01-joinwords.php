<?php

// Create a function, joinWords, that takes two strings as arguments. The function should return the two strings joined together with a space in between.

require __DIR__ . "/vendor/autoload.php";

function joinWords($firstWord, $secondWord) {
    return $firstWord . " " . $secondWord;   // function created - remember semi-colon or it won't work!
};

dump(joinWords("fish", "sticks")); // "fish sticks"
dump(joinWords("hello", "world")); // "hello world"