<?php

//function __construct([mixed $var, ...])
//constructors are a type of class that runs when the class is substantiated 

class Person {
    //constant
    const AVG_LIFE_SPAN = 79;
    //properties
    public $firstName;
    public $lastName;
    public $yearBorn;
    //constructor
    function __construct(){
        //echo "I'm in the constructor";
        $this->firstName = "Kenneth";
        $this->lastName = "Kopelson";
        $this->yearBorn = 1992;
    }

    //methods
    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($tempName){
        $this->firstName = $tempName;
    }
}

$myObject = new Person();//this will now run the constructor

echo $myObject->getFirstName();