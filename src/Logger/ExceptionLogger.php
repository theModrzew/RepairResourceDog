<?php
// just an idea for now

namespace Rrd\Logger;

class ExceptionLogger extends StandardPhpLogger
{
    public function logException($level, Throwable $e)
    {
        $this->error($e->getMessage(), $e->getCode(), ['exception' => $e]);
    }
}
