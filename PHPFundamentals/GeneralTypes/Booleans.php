<?php

$bool = true;

$hasValue = 1234;
$hasValueEmptyString = "";
$hasValueInt = 0;

var_dump($bool);
var_dump((bool)$hasValue);
var_dump((bool)$hasValueEmptyString);
var_dump((bool)$hasValueInt);