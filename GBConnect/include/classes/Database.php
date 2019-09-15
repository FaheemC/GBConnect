<?php

/**
 * Created by PhpStorm.
 * User: Maziar
 * Date: 11/21/2016
 * Time: 2:05 PM
 */
class Database extends mysqli
{
    public function __construct($host, $username, $passwd, $dbname, $port, $socket)
    {
        parent::__construct($host, $username, $passwd, $dbname, $port, $socket);
    }

}