<?php

require 'functions.php';
// require 'router.php';

// connect to our MySQL database with PDO - PHP data objects
$dsn = 'mysql:host=localhost:3306;dbname=db;charset=utf8mb4';

$pdo = new PDO($dsn, 'user','123');

$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo '<li>' .  $post['title'] . '</li>';
}