<?php

namespace Rrd\Logger;

use Throwable;

class ExceptionLogger extends StandardPhpLogger
{
    /**
     * @param string $name Name for log sorting (eg. "App", "Api")
     */
    public function __construct(string $name = 'App')
    {
        parent::__construct($name);
    }

    public function logException($level, Throwable $e)
    {
        $this->log($level, $e->getMessage(), ['exception' => $e]);
    }
}
