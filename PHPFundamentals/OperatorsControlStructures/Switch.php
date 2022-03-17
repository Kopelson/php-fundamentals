<?php
/*
    switch($variable)
    {
        case 'val':
            break;
    }

*/
$authors = ["Charles Dickens", "William Shakespeare", "Mark Twain", "Louisa May Alcott"];

$authors = [];

$count = count($authors);


// if($count == 1){
//     echo "There is one author.".PHP_EOL;
// } elseif($count > 1){
//     echo "There is a total of ".$count." authors.".PHP_EOL;
// } else {
//     echo "There are no authors.".PHP_EOL;
// }

switch($count){
    case 0:
        echo "There are no authors.".PHP_EOL;
        break;
    case 1:
        echo "There is one author.".PHP_EOL;
        break;
    default:
        echo "There is a total of ".$count." authors.".PHP_EOL;
        break;
}

