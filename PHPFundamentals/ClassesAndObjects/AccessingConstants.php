<?php

class Person {
    const AVG_LIFE_SPAN = 79;

    public $firstName ="Kenneth";
    public $lastName = "Kopelson";
    public $yearBorn = "1992";
}

$myObject = new Person();

//2 ways to access the constant

// by using :: scope resolution operator
echo $myObject::AVG_LIFE_SPAN;

//or

echo Person::AVG_LIFE_SPAN;
