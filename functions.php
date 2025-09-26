<?php

// Creating a function
function say_hello(){

    echo 'Hello';

}

// Calling that function
say_hello(); // Outputs: Hello


// Creating a functions with a parameter and a default value
function greet($name = 'you'){

    echo "\nHello, $name";

}

greet('Rafael'); // outputs: Hello, Rafael
greet();         // outputs: Hello, you


// Function that returns something, we are saying it is given INT values
// and returns an INT value
function add(int $number_1, int $number_2): int{

    return $number_1 + $number_2;

}

echo "\n" . add(5, 1); // Outputs: 6

?>

// Anonymous function
$greet = function($name = 'you'){
    echo "hello, " . $name;
};


greet('Taylor');
