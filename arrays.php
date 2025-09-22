<?php


// Numeric array
$colors = ['red', 'blue', 'green'];

// Associative array
$user = [
    'name' => 'Rafa',
    'age' => 22
];

// Mixed array
$mixed = [
    42,                  // index 0
    'key' => 'value',    // key 'key'
    'another value'      // index 1
];

// Working with arrays
$colors = ['red', 'blue', 'green'];
echo $colors[0];    // outputs: red

$user = ['name' => 'John', 'age' => 25];
echo "\n" . $user['name']; // outputs: John

// Common operations

// Adding elements
$colors[] = 'yellow';           // Add to numeric array
$user['email'] = 'john@example.com';  // Add to associative array

// Checking elements
isset($user['email']);          // Check if key exists
in_array('red', $colors);       // Check if value exists

// Array size
count($colors);                 // Get number of elements

// Remove elements
unset($user['email']);          // Remove specific element