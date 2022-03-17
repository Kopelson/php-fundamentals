<?php

//require, require_once
//This includes a file but if not found the php stops processing.

include 'Person.php';
include_once 'Author.php';
require 'RandomFile.php';

$newAuthor = new Author("Samuel L.", "Clemens", 1899);

echo $newAuthor->getCompleteName();

