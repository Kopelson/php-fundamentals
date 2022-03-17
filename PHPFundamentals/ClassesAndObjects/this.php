<?php
//pseudo-variable $this
class Person {
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