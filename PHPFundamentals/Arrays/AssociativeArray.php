<?php

//Anytime you adjust the index of an array your turned the array from an indexed array to associative array.
$authors = array(
    "quarky" => "Charles Dickens",
    10 => "Jane Austin",
    "poetic" => "William Shakespeare",
    "Mark Twain"
);

print_r($authors);
