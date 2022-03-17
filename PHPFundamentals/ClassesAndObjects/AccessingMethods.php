<?php

class Person {
    //constant
    const AVG_LIFE_SPAN = 79;
    //properties
    public $firstName ="Kenneth";
    public $lastName = "Kopelson";
    public $yearBorn = "1992";
    //methods
    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($tempName){
        $this->firstName = $tempName;
    }
}

$myObject = new Person();

$myObject->setFirstName("Ken");

echo $myObject->firstName;

echo $myObject->getFirstName();