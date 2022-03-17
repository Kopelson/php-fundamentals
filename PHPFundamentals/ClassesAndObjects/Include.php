<?php

//include, include_once

include 'Person.php';
include_once 'Author.php';

$newAuthor = new Author("Samuel L.", "Clemens", 1899);

echo $newAuthor->getCompleteName();

