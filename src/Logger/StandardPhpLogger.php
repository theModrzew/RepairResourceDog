<?php

namespace Rrd\Logger;

use Psr\Log\AbstractLogger;

class StandardPhpLogger extends AbstractLogger
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @param string $name Name for log sorting (eg. "App", "Api")
     */
    public function __construct(string $name = 'App')
    {
        $this->name = $name;
    }

    /**
     * @inheritdoc
     */
    public function log($level, $message, array $context = [])
    {
        error_log('[' . $this->name . '] ' . strtoupper($level) . ': ' . $message);
    }
}
