<?php

$authors =array("Charles Dickens", "Jane Austin", "William Shakespeare");

//int array_push(array &$array, mixed $value1 [,mixed $...])
array_push($authors, "Louisa May Alcott");

$authors[] = "L. M. Montgomery";//square bracket syntax for indexed array **preferred way to add items to an array

$authors['nice'] = "L. M. Montgomery";//square bracket syntax for associative array

print_r($authors);