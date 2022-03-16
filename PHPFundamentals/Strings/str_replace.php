<?php

$quote = "To be or not to be? That is the question.";

// mixed str_replace(mixed $search, mixed $replace, mixed $subject [,int &$count])

$replaced = str_replace("be", "know", $quote);

echo $replaced;

$replaced = str_replace("be", "know", $quote, $count); //count is passed by referenced

echo $count;