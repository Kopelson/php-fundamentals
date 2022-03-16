<?php

$authors =array("Mark Twain", "Charles Dickens", "Jane Austin", "William Shakespeare");

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    10 => "Jane Austin",
    "poetic" => "William Shakespeare",
    "Mark Twain"
);

//bool sort(array &$array [, int $sort_flags=SORT_REGULAR])

sort($authors);

print_r($authors);

//sort to an associative array will turn it into an indexed array

//bool asort(array &$array [, int $sort_flags = SORT_REGULAR])
asort($authorsAssociative);
//asort will preserve the keys of the array

print_r($authorsAssociative);

//ksort sorts by key value
//bool ksort(array &$array [, int $sort_flags = SORT_REGULAR])

ksort($authorsAssociative);

print_r($authorsAssociative);