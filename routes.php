<?php

use Rrd\FrontController\HomeController;
use Rrd\FrontController\SearchController;

/**
 * @type Slim\App $app
 * @type DI\Container $container
 * @type Rrd\Logger\ExceptionLogger $exceptionLogger
 * @type Psr\Log\LoggerInterface $logger
 * @type string $webRoot
 */

/** @see HomeController::index() */
$app->get('/', HomeController::class . ':index')->setName('home-page');

/** @see SearchController::run() */
$app->get('/query', SearchController::class . ':run')->setName('run-search');
