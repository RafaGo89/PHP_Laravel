<?php

// Nested array
$blogPost = [
    'title' => 'Getting Started with PHP',
    'author' => [
        'name' => 'John',
        'role' => 'editor'
    ],
    'comments' => [
        ['user' => 'Jane', 'text' => 'Great article!'],
        ['user' => 'Bob', 'text' => 'Thanks for sharing']
    ]
];

echo $blogPost['title'];                  // outputs: Getting Started with PHP
echo $blogPost['author']['name'];         // outputs: John

echo $blogPost['comments'][0]['text'];    // outputs: Great article!

?>
