<?php

session_start();

$dontenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__,2));
$dontenv->load();

use Slim\Factory\AppFactory;

$app = AppFactory::create();

$routes = require '../app/routes/routes.php';
$routes($app);

$app->run();