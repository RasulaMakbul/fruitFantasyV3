<?php

namespace ConnectionControl;

class DBConn
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "fruitfantasydb";
    public $connection = NULL;

    public function dbConnection()
    {
        global $connection;
        $connection = new \PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        //echo "Connection Successful";
        return $connection;
    }
}
