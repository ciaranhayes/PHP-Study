<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$db = new Database();

$posts = $db->query("SELECT * FROM posts WHERE id = 1");

dd($posts);




