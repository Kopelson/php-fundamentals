<?php

$quote = "Courage is resistance to fear, mastery of fear, not absence of fear.";

//mixed strpos(string $haystack, mixed $needle [, int $offset = 0])


echo strpos($quote, "fear"); // prints 25
echo strpos($quote, "fear", 26); // prints 42

echo strpos($quote, "c"); // prints 19 strpos is case sensitive.
echo strpos($quote, "C"); // prints 0

echo strpos($quote, "z"); // returns an empty string


