<?php

//static -> a static property has to have a value set and a static method must be self-contained

class Person {
    //constant
    const AVG_LIFE_SPAN = 79;
    //properties
    private $firstName;
    private $lastName;
    private $yearBorn;
    //constructor
    function __construct($tempFirst = "", $tempLast = "", $tempBorn = ""){
        echo "Person Constructor".PHP_EOL;
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }

    //methods
    public function getFirstName(){
        return $this->firstName.PHP_EOL;
    }

    public function setFirstName($tempName){
        $this->firstName = $tempName;
    }

    protected function getFullName(){
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

class Author extends Person {
    //created a static property
    public static $centuryPopular = "19th";//created static property
    private $penName = "Mark Twain";

    public function getPenName(){
        return $this->penName.PHP_EOL;
    }

    public function getCompleteName(){
        return $this->getFullName()."a.k.a ".$this->penName.PHP_EOL;
    }
    //Creating a static method
    public static function getCenturyAuthorWasPopular(){
        //Use self to access static properties inside a class
        return self::$centuryPopular;
        //Use parent to access static properties from an inherited class
    }
}

//ClassName::$staticProperty, ClassName::methodName()

echo Author::$centuryPopular; //you do use the $ on static properties

echo Author::getCenturyAuthorWasPopular();