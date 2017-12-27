<?php
$database = require 'core/bootstrap.php';

// die(var_dump($app));

require Router::load('routes.php')
        ->direct(Request::uri(), Request::method());