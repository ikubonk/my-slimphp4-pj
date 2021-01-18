<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;


require __DIR__ . '/../vendor/autoload.php';

// create DI-Container
$container = new Container();
AppFactory::setContainer($container);
$app = AppFactory::create();
$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->run();