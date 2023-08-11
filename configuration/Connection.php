<?php

namespace Configuration;

use PDO;
use PDOException;

define('HOST', 'localhost');
define('DBPORT', '3306');
define('DBNAME', 'agendatelefonica');
define('USER', 'root');
define('PASSWORD', '');

class Connection {
    protected $connection;

    function __construct()
    {
        $this->connectDataBase();
    }

    function connectDataBase() {
        try {
            $this->connection = new PDO (
                'mysql:
                    host='.HOST.';
                    port='.DBPORT.';
                    dbname='.DBNAME, USER, PASSWORD
            );
        } catch (PDOException $e) {
            echo "Error! ".$e->getMessage();
            die();
        }

        return $this->connection;
    }
}