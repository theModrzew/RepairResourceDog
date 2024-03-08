<?php

namespace Rrd\Logger;

use Psr\Log\LoggerInterface;

class LoggerFactory
{
    public static function create(string $name = 'App') : LoggerInterface
    {
        return new StandardPhpLogger($name);
    }

    public static function createForExceptions(string $name = 'App') : ExceptionLogger
    {
        return new ExceptionLogger($name);
    }
}
