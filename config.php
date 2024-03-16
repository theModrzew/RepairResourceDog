<?php

class Config
{
    const DB_DSN = 'mysql:unix_socket=/var/run/mysqld/mysql.sock0;dbname=rrd;charset=utf8mb4';
    const DB_USER = '';
    const DB_PASSWD = '';
    const TEMPLATE_DIR = 'template';
    const FILE_ACCESS_DIR = 'data';
}
