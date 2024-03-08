<?php

use Psr\Log\LogLevel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Rrd\Logger\LoggerFactory;
use Slim\Factory\AppFactory;

mb_internal_encoding('UTF-8');

chdir(dirname(__FILE__));
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config.php';

$logger = LoggerFactory::create();
$exceptionLogger = LoggerFactory::createForExceptions();
$app = AppFactory::create();

$app->addErrorMiddleware(true, true, true);

// Add routes
$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write('Repair Resource Dog');

    return $response;
});

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

try {
    $app->run();
} catch (Throwable $e) {
    $exceptionLogger->logException(LogLevel::ALERT, $e);
    header($_SERVER['SERVER_PROTOCOL'] . ' 302 Found', true, 302);
    header('Location: /panic.html');
    return;
}
