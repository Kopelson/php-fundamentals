<?php

function booksByAuthorYear($tempAuthorName, $tempYear = 1910){ //$parameters = default value
    echo $tempYear;
    echo "\n";
    echo $tempAuthorName;
    echo "\n";
}

function getAuthor(){
    return "Charles Dickens"; //this returns a value
}

$year = 1920;
$authorName = getAuthor();

booksByAuthorYear($authorName, $year);
