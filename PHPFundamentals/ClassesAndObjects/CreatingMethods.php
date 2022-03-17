<?php
//Methods are functions inside of a class
class Person {
    const AVG_LIFE_SPAN = 79;

    public $firstName ="Kenneth";
    public $lastName = "Kopelson";
    public $yearBorn = "1992";

    //methods
    //getters and setters
    public function getFirstName(){

    }

    public function setFirstName($tempName){

    }
}

$myObject = new Person();