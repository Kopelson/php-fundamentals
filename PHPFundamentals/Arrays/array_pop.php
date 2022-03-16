<?php

$authors =array("Charles Dickens", "Jane Austin", "William Shakespeare");

//mixed array_pop(array &$string)

$lastValue = array_pop($authors);

echo $lastValue;
print_r($authors);