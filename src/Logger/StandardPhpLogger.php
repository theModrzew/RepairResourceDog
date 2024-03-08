<?php

namespace Rrd\Logger;

use Psr\Log\AbstractLogger;

class StandardPhpLogger extends AbstractLogger
{
    /**
     * @var string
     */
    private $name;

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
        $replace = [];
        foreach ($context as $key => $val) {
            if (is_array($val) || is_object($val)) {
                continue;
            }
            $replace['{' . $key . '}'] = $val;
        }

        $message = strtr($message, $replace);

        error_log('[' . $this->name . '] ' . strtoupper($level) . ': ' . $message);
    }
}
