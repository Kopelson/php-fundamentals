<?php

//NullCoalesce operator ??

$authors = ["Charles Dickens", "William Shakespeare", "Mark Twain", "Louisa May Alcott"];

//$count = count($authors);

$outcome =  $count ?? $anotherVariable ?? "Count unavailable.";

echo $outcome;