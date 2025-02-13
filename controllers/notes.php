<?php

$db = new Database();

$heading = 'My Notes';

$notes = $db->query('SELECT * FROM notes WHERE user_id = 4');

require("views/notes.view.php");