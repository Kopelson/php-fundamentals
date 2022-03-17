<?php

//protected and private can be used on methods and properties
//protected keyword can be only accessed within the class itself.
//inherited classes can also access protected properties and methods.

class Person {
    //constant
    const AVG_LIFE_SPAN = 79;
    //properties
    protected $firstName;
    protected $lastName;
    protected $yearBorn;
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
    protected $penName = "Mark Twain";

    public function getPenName(){
        return $this->penName.PHP_EOL;
    }

    public function getCompleteName(){
        return $this->firstName." ".$this->lastName." ".$this->penName.PHP_EOL;
    }
}

$newAuthor = new Author("Samuel L.", "Clemens", 1899);

//echo $newAuthor->getFullName(); //throws an error 
//echo $newAuthor->penName(); //throws an error 

echo $newAuthor->getCompleteName();

//to access protected properties or methods you need to use a public method to access a protected property or method within the same class

