<?php
$db = new Database();
$heading = 'Note';

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->fetch();

if (! $note) {
    abort();
}

$currentUserId = 4;

authorise($note['user_id'] === $currentUserId);

require("views/note.view.php");