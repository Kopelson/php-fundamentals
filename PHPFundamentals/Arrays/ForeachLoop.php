<?php

$authors = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "WIlliam Shakespeare"
);

foreach($authors as $key => $val){
    echo $val." (".$key.")\n";
}