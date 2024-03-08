<?php

use Psr\Container\ContainerInterface;
use Rrd\FrontController\HomeController;
use Rrd\FrontController\SearchController;
use Rrd\View\ViewInterface;

/**
 * @type Slim\App $app
 * @type DI\Container $container
 * @type Rrd\Logger\ExceptionLogger $exceptionLogger
 * @type Psr\Log\LoggerInterface $logger
 * @type string $webRoot
 */

$container->set(HomeController::class, function (ContainerInterface $container) use ($app) {
    return new HomeController(
        $container->get(ViewInterface::class),
        $app->getRouteCollector()->getRouteParser()
    );
});

$container->set(SearchController::class, function (ContainerInterface $container) use ($app) {
    return new SearchController(
        $container->get(ViewInterface::class),
        $app->getRouteCollector()->getRouteParser()
    );
});
