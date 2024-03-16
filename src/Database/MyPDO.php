<?php

namespace Rrd\Database;

use Config;
use PDO;

class MyPDO extends PDO
{
    public function __construct(Config $config)
    {
        parent::__construct($config::DB_DSN, $config::DB_USER, $config::DB_PASSWD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
}
