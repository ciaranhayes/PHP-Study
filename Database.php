<?php
class Database {
    public $connection;
    public $host = "localhost";
    public $port = "3306";
    public $user = "user";
    public $password = "123";
    public $database = "db";
    public function __construct() {
        $dsn = "mysql:host=$this->host:$this->port;dbname=$this->database;charset=utf8mb4";

        $this->connection = new PDO($dsn, $this->user, $this->password);
    }

    public function query($query, $params = []) {
        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement->fetchALL(PDO::FETCH_ASSOC);
    }
}

