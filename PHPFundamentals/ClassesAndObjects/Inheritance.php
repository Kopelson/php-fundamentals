<?php
//Inheritance allows once class to inherit from another class

//PHP_EOL takes the place of the "\n" EOL stands for end of line

class Person {
    //constant
    const AVG_LIFE_SPAN = 79;
    //properties
    public $firstName;
    public $lastName;
    public $yearBorn;
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

    public function getFullName(){
        echo "Person->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

class Author extends Person { //the extends keyword is used to set inheritance
    public $penName = "Mark Twain";

    public function getPenName(){
        return $this->penName.PHP_EOL;
    }

    public function getFullName(){
        echo "Author->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;//this will look in the inherited class as well as this class
    }
}

$newAuthor = new Author("Ken", "Kopelson", 1992);

echo $newAuthor->getFullName();
