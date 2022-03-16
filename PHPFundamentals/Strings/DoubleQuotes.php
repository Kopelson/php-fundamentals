<?php

$currency = "penny";

//double quotes do print variables
$sampleString = "A $currency saved is a $currency earned.";

//echo $sampleString;

$var = 2;

//echo "$varnd place"; //doesn't find the variable

echo "{$var}nd place"; // {} locates the variable

echo $var."nd place";//concatenation uses a  . not a +

$misc = "St. Patrick's Day"; //single quotes work inside double quotes


//$misc = "St. Patrick\"s Day"; //backslash will allow you to put in extra double quotes in a double quoted string

// $misc = "St. Patrick's Day \n"; //double quotes evaluate \n as new line;

echo $misc;