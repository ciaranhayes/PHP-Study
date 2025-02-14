<?php

$db = new Database();
$heading = 'Note';

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']]);

if (! $note) {
    abort();
}

$currentUserId = 4;

if ($note[0]['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

require("views/note.view.php");