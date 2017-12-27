<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/router.php';
require 'core/request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);