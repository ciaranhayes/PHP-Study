<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$db = new Database();

$id = $_GET['id'];

$query = "SELECT * FROM posts WHERE id = :id";

$posts = $db->query($query, ["id" => $id]);

dd($posts);





