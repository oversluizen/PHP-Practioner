<?php

require 'function.php';

$task = [
    'title' => 'Finish homework',
    'due' => 'Today',
    'assigned_to' => 'Jaco',
    'completed' => false
];

dd($task);

require 'index.view.php';