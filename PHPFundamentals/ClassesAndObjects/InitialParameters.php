<?php

class Person {
    //constant
    const AVG_LIFE_SPAN = 79;
    //properties
    public $firstName;
    public $lastName;
    public $yearBorn;
    //constructor
    function __construct($tempFirst = "", $tempLast = "", $tempBorn = ""){
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }

    //methods
    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($tempName){
        $this->firstName = $tempName;
    }
}

$myObject = new Person("Kenneth", "Kopelson", 1992);

echo $myObject->getFirstName();