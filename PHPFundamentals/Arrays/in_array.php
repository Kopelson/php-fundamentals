<?php 

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain", "Louisa May Alcott", 13);

//bool in_array(mixed $needle, array $haystack [,bool $strict = FALSE])

// echo in_array("Jane Austin", $authors); //prints 1

// echo in_array("L.M. Montgomery", $authors); //prints nothing

//echo in_array(13, $authors, true); //prints 1

echo in_array("13", $authors, true); //prints nothing