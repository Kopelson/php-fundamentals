<?php

$authorsIndexed = array("Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain", "Louisa May Alcott");

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    10 => "Jane Austin",
    "poetic" => "William Shakespeare",
    "Mark Twain"
);

//bool array_key_exists(mixed $key, array $array);

//echo array_key_exists(5, $authorsAssociative);// prints nothing which means it returns false

echo array_key_exists('poetic', $authorsAssociative);// prints 1 which means true it does exists

//echo $authorsIndexed[1]; //prints Jane Austin

//echo $authorsAssociative['quarky']; //prints Charles Dickens
