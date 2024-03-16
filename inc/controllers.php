<?php

use Psr\Container\ContainerInterface;
use Rrd\FrontController\HomeController;
use Rrd\FrontController\SearchController;
use Rrd\FrontController\UserFileUploadController;
use Rrd\View\ViewInterface;

/**
 * @type Slim\App $app
 * @type DI\Container $container
 * @type Rrd\Logger\ExceptionLogger $exceptionLogger
 * @type Psr\Log\LoggerInterface $logger
 * @type string $webRoot
 */

/*
 * Show home page
 */
$container->set(HomeController::class, function (ContainerInterface $container) use ($app) {
    return new HomeController(
        $container->get(ViewInterface::class),
        $app->getRouteCollector()->getRouteParser()
    );
});

/*
 * Run a search and return results page
 */
$container->set(SearchController::class, function (ContainerInterface $container) use ($app) {
    return new SearchController(
        $container->get(ViewInterface::class),
        $app->getRouteCollector()->getRouteParser()
    );
});

/*
 * Start processing user uploaded file
 */
$container->set(UserFileUploadController::class, function (ContainerInterface $container) use ($app) {
    return new UserFileUploadController(
        $container->get(ViewInterface::class),
        $app->getRouteCollector()->getRouteParser()
    );
});
