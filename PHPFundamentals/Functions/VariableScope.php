<?php

$authorName = "William Shakespeare"; //Global Scope

function setAuthorName(){
    $authorName = "Charles Dickens"; //Local Scope
}

setAuthorName();

echo $authorName;

?>