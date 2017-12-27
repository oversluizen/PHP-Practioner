<?php
require 'task.php';
require 'function.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

// echo '<pre>';
// var_dump($results[0]->description);
// echo '</pre>';

require 'index.view.php';