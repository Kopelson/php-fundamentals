<?php

function bookByAuthor($authorName){
    echo $authorName;
}

bookByAuthor("William Shakespear\n");

$authorName = "Bob Sager\n";

bookByAuthor($authorName);

function bookByAuthorYear($authorName, $year){
    echo $year;
    echo "\n";
    echo $authorName;
}

$year = 1910;

bookByAuthorYear($authorName, $year);