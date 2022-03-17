<?php

class Person {
    public $firstName ="Kenneth";
    public $lastName = "Kopelson";
    public $yearBorn = "1992";
}

$myObject = new Person();

echo $myObject->firstName."\n";

$myObject->firstName = "K. L.";

echo $myObject->firstName;