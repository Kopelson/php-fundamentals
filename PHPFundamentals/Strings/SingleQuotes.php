<?php

$currency = 'penny';
//single quotes do not print variables
$sampleString = 'A $currency saved is a $currency earned.';

//echo $sampleString;

// $misc = 'St. Patrick's Day'; //throws an error
$misc = 'St. Patrick\'s Day'; //backslash fixes this error

//Single quotes will print everything out as is, so..
//$misc = 'St. Patrick\'s Day\n';  will print St. Patrick's Day\n
echo $misc;

