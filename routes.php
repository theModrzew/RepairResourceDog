<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Rrd\FrontController\HomeController;

/**
 * @type Slim\App $app
 * @type DI\Container $container
 * @type Rrd\Logger\ExceptionLogger $exceptionLogger
 * @type Psr\Log\LoggerInterface $logger
 * @type string $webRoot
 */

/** @see HomeController::index() */
$app->get('/', HomeController::class . ':index');

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});
