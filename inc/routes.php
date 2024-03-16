<?php

use Rrd\FrontController\HomeController;
use Rrd\FrontController\SearchController;
use Rrd\FrontController\UserFileUploadController;

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

/** @see UserFileUploadController::upload() */
$app->post('/upload', UserFileUploadController::class . ':upload')->setName('file-upload');
