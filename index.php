<?php
$person = [
    'age' => 44,
    'hair' => 'brown',
    'career' => 'pastor'
];

$person ['name'] = 'Jaco';
echo '<pre>';
die(var_dump($person));
echo '</pre>';

require 'index.view.php';