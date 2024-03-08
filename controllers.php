<?php

use Psr\Container\ContainerInterface;
use Rrd\FrontController\HomeController;
use Rrd\View\ViewInterface;

/**
 * @type Slim\App $app
 * @type DI\Container $container
 * @type Rrd\Logger\ExceptionLogger $exceptionLogger
 * @type Psr\Log\LoggerInterface $logger
 * @type string $webRoot
 */

$container->set(HomeController::class, function (ContainerInterface $container) {
    return new HomeController(
        $container->get(ViewInterface::class)
    );
});
