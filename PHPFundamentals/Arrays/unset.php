<?php

$authors =array("Charles Dickens", "Jane Austin", "William Shakespeare");

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    10 => "Jane Austin",
    "poetic" => "William Shakespeare",
    "Mark Twain"
);


//void unset(mixed $var [, mixed $...])

unset($authors[1], $authors[0]);

unset($authorsAssociative['poetic']);

unset($authors);

print_r($authors);
print_r($authorsAssociative);