<?php

// FOREACH LOOP

$colors = ['red', 'blue', 'green'];

// We use a foreach to iterate over a collection of elements
foreach($colors as $color){
    echo $color . "\n";
}

// We can acess to the key of the element inside an array
foreach($colors as $key => $color){
    echo $key . "\n";
}

$invoice_items = [
    ['item' => 'laptop', 'price' => 1200],
    ['item' => 'Mouse', 'price' => 75],
    ['item' => 'Keyboard', 'price' => 100]
];

$totals = 0;

# Sum the price of all items
foreach($invoice_items as $item){
    $totals = $totals + $item['price'];
}

echo "\nTotal of all items: " . $totals;

// FOR LOOP
echo "\n\nfor loop in action:\n";

for($i = 0; $i < 5; $i++){
    var_dump($i);
}

// WHILE LOOP

echo "\nwhile loop in action:\n";

$count = 0;

while($count < 5){
    var_dump($count);

    $count++;
}

// DO WHILE LOOP

echo "\ndo while loop in action:\n";

$count = 1000;

do{
    var_dump($count);

    $count++;
} while($count < 5);

?>