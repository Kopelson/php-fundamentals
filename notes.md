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
