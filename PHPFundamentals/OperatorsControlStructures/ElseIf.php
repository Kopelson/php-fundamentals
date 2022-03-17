<?php

$authors = ["Charles Dickens", "William Shakespeare", "Mark Twain", "Louisa May Alcott"];

$authors = ["Charles Dickens"];

$count = count($authors);


if($count == 1){
    echo "There is one author.";
} elseif($count > 1){
    echo "There is a total of ".$count." authors.";
} else {
    echo "There are no authors.";
}