<?php

namespace HelloKant;

use \PDO;

class Database 
{    
    protected function db()
    {
        $config = file_get_contents(dirname(__DIR__) . '/example/config/config.json');
        $host = json_decode($config);
        $db = new PDO('mysql:host=' . $host->host . ';dbname=' . $host->name . ';charset=utf8;', $host->user, $host->pass);
        return $db;
       
    }
}