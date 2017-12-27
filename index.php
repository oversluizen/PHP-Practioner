<?php

$query = require 'bootstrap.php';
// require 'task.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';