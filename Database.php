<?php
class Database {
    public $connection;
    public function __construct() {
        $dsn = "mysql:host=localhost:3306;dbname=db;charset=utf8mb4";

        $this->connection = new PDO($dsn, "user", "123");
    }
    public function query($query) {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}

$db = new Database();
$posts = $db->query("select * from posts");

dd($posts['title']);
