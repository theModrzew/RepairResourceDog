<?php

use DI\Container;
use Psr\Log\LogLevel;
use Rrd\Logger\LoggerFactory;
use Slim\Factory\AppFactory;

/**
 * @type Slim\App $app
 * @type DI\Container $container
 * @type Rrd\Logger\ExceptionLogger $exceptionLogger
 * @type Psr\Log\LoggerInterface $logger
 * @type string $webRoot
*/

mb_internal_encoding('UTF-8');

$webRoot = dirname(__FILE__);
chdir($webRoot);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config.php';

$logger = LoggerFactory::create();
$exceptionLogger = LoggerFactory::createForExceptions();

$container = new Container();
AppFactory::setContainer($container);
$app = AppFactory::create();

$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);

require_once __DIR__ . '/../inc/bootstrap.php';
require_once __DIR__ . '/../inc/controllers.php';
require_once __DIR__ . '/../inc/routes.php';

try {
    $app->run();
} catch (Throwable $e) {
    $exceptionLogger->logException(LogLevel::ALERT, $e);
    header($_SERVER['SERVER_PROTOCOL'] . ' 302 Found', true, 302);
    header('Location: /panic.html');
    return;
}
