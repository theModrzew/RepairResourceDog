<?php

use Slim\Factory\AppFactory;

mb_internal_encoding('UTF-8');

chdir(dirname(__FILE__));
require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

try {
    $app->run();
} catch (Throwable $e) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 302 Found', true, 302);
    header('Location: /panic.html');
    return;
}
