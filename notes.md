# PHP Fundamentals

(Personal Home Page)

PHP Hypertext Preprocessor


## Reserved Keywords and Variables

    if, else, while, and, or, return, new, class, switch, break, for, foreach, static, public

    require, require_once, include, include_once, extends, continue, print, echo, var

    endfor, endif, endforeach, endswitch, endwhile

    $_GET, $_POST, $_COOKIE, $_SERVER, $_FILES, $_ENV, $this,

### Course Outline
    General Types
    Functions
    Strings
    Arrays
    Classes and Objects
    Operators & Control Structures
    Databases
    Web Programming

## General Types
    comments and case sensitivity
    variables
        -integers, booleans, decimals, constants
    how to determine types

### Basics

#### Comments:

    //C++ line comment

    /*
    C-Style comment block
    */

    # Shell style comment

#### Case Sensitivity - Variables

    $caseSensitive = "I am unique.";
    $CaseSensitive = "I'm different.";

    echo $caseSensitive;
    echo $CaseSensitive;

    *** Case sensitive

#### Case Sensitivity - Classes

    class Company
    {
        ...
    }

    $c1 = new ComPanY;
    $c2 = new COMPANY;

    *** Not case sensitive

#### Case Sensitivity - Functions

    function companyName()
    {
        ...
    }

    companyname();
    CompanyName();
    COMPANYNAME(); 

    *** Not case sensitive


## Functions
    What is a function?
    Creating/Calling a function
    Passing/Default parameters
    Returning values
    Variable functions
    Variable scope

### What is a Function?
    Block of code
    Perform a specific task
    Used throughout your program

#### General Syntax of a Function

function createName($parameter, $anotherParameter)
{
    //perform some function here...
}

## Strings
    Basic string creation
        Single quote
        Double quote
        here doc

    Print function
        echo
        print
        print_r

    String functions
        strtolower
        strtoupper
        strlen
        strpos
        str_replace
        substr
        str_split

## Arrays
    Basic array creation
        Indexed
        Associative

    Accessing array values

    Built-in functions
        array_key_exists
        in_array
        array_pop
        array_push
        count
        sort
        ksort
        asort
        unset
    
    Foreach loop

    multi-dimensional arrays

### All about arrays

    Collection of types
    Can contain any type
    Each value has a related key
    array()[]

## Classes and Objects

    What is a class?
    How to create/use a class
    How to access parts of the class
    Inheritance and visibility
    Adding PHP flies

## Operators & Control Structures

    Operators
    Control structures
    

