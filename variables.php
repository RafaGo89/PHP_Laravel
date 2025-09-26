<?php

// Creating variables
$status = 404;
$number = 404.02;
$name = 'rafa';
$is_Open = true;

// Using this function to see the value of the variable
var_dump($status);
var_dump($number);
var_dump($name);
var_dump($is_Open);

// We can concatenate with two varibles at the same time using "" double commas
$text = "Not found $name";
var_dump($text);

# We can also use the . operator
$phrase = "Hello " . $name;
var_dump($phrase);

# We can cast variables
$age = (int) '22';
var_dump($age);

$age_text = (string) 22;
var_dump($age_text);

// PHP can guess the datatype of some variables
$sum = '500' + 10;

var_dump($sum);

?>
