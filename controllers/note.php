<?php

$db = new Database();
$heading = 'Note';

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']]);

var_dump($note);

require("views/note.view.php");