<?php

// Using loops a little bit more

$users = [
    ['name' => 'John', 'newsletters' => true],
    ['name' => 'Jane', 'newsletters' => false],
    ['name' => 'Bob', 'newsletters' => true]
];

foreach($users as $user){
    if($user['newsletters'] == false) {
        continue;
        // break; to get out of the loop
    }

    echo "\nSend newsletters to " . $user['name'];
}

$numbers = [1, 2, 3, 4, 5];
$doubled = [];

foreach($numbers as $number){
    $doubled[] = $number * 2;
}

echo "\n";
var_dump($doubled);

?>