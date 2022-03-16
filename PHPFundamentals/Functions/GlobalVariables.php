<?php

$authorName = "William Shakespeare"; 

function setAuthorName(){
    global $authorName; //This makes the variable have global scope ***works only inside a function
    $authorName = "Charles Dickens"; 
}

setAuthorName();

echo $authorName;

?>