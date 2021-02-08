<?php

require __DIR__ . "/vendor/autoload.php";

function hello($name) {
    return "hello {$name}";
};

dump(hello("alice")); // "hello alice"
dump(hello("bob")); // "hello bob"



// using interperlation to return string. Remember in PHP the curly braces are doing the interperlation not the $.