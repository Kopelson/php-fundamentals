# PHP Fundamentals

(Personal Home Page)

PHP Hypertext Preprocessor

What's Possible?

Server-side scripting (creating web sites)

command line scripting

Example PHP program

-simple script

<?php 
    $message = "Hello World!";
    echo $message;
?>


-simple web script

<?php
$message = "Hello World!";
$title = "HTML Sample";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Fundamentals - <?=$title?></title>
    </head>
    <body>
        <h1><?php echo $message ?> </h1>
    </body>
</html>

