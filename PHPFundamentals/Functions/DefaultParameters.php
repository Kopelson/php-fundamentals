<?php

function booksByAuthorYear($tempAuthorName, $tempYear = 1910){ //$parameters = default value
    echo $tempYear;
    echo "\n";
    echo $tempAuthorName;
    echo "\n";
}

$year = 1920;
$authorName = "William Shakespeare";

//booksByAuthorYear($authorName, $year);
booksByAuthorYear($authorName);