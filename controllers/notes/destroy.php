<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query('SELECT * from notes where id = :id', ['id' => $_POST['id']])->findOrFail();

$result = authorize($note['user_id'] == $currentUserId);

//form was submitted. Delete the current note
$db->query("DELETE FROM notes WHERE id= :id", ['id' => $_POST['id']]);

//Redirect to note page
header('location: /notes');
exit();
