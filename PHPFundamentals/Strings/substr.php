<?php

$quote = "Only those who will risk going too far can possibly find out how far one can go.";

//string substr(string $string, int $start[, int $length])

// echo substr($quote, 4); //returns " those who will risk going too far can possibly find out how far one can go."

// echo substr($quote, -4); //returns go.

//echo substr($quote, 3, 5); // returns "y tho"

echo substr($quote, 3, -5); // returns "y those who will risk going too far can possibly find out how far one ca"