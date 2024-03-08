<?php

use DI\Container;
use Rrd\View\ViewInterface;

/**
 * @type Slim\App $app
 * @type DI\Container $container
 * @type Rrd\Logger\ExceptionLogger $exceptionLogger
 * @type Psr\Log\LoggerInterface $logger
 * @type string $webRoot
 */

$container->set(Config::class, function () {
    return new Config();
});

$container->set(ViewInterface::class, function (Container $container) use ($app, $webRoot) {
    /** @var Config $config */
    $config = $container->get(Config::class);
    $directory = rtrim($config::TEMPLATE_DIR, '/\\');
    $templateDir = realpath($webRoot . '/../' . $directory) . '/';

    return new \Rrd\View\ViewRenderer(
        $templateDir,
        new \Rrd\View\PageRenderOrchestrator(
            $app->getRouteCollector()->getRouteParser()
        )
    );
});
