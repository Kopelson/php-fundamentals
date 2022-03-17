<?php

//?: ternary
//(expr1)?(expr2):(expr3)

$authors = ["Charles Dickens", "William Shakespeare", "Mark Twain", "Louisa May Alcott"];
$count = count($authors);

// if($count > 0){
//     echo "There is a total of ".$count." author(s).";
// } else {
//     echo "There is no authors.";
// }

$outcome = ($count > 0) ? "Author Total: ".$count : "No Authors";

echo $outcome;