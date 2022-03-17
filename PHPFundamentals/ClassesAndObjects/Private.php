<?php

//private 

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
    private $penName = "Mark Twain";

    public function getPenName(){
        return $this->penName.PHP_EOL;
    }

    public function getCompleteName(){
        return $this->getFullName()."a.k.a ".$this->penName.PHP_EOL;
    }
}

$newAuthor = new Author("Samuel L.", "Clemens", 1899);

//echo $newAuthor->penName;//throws error

//private property or methods can only be accessed inside the class where they are defined or set

echo $newAuthor->getCompleteName();