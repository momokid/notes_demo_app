<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $note = $db->query('SELECT * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

    $result = authorize($note['user_id'] == $currentUserId);

    //form was submitted. Delete the current note
    $db->query("DELETE FROM notes WHERE id= :id", ['id' => $_GET['id']]);

    //Redirect to note page
    header('location: /notes');
    exit();

} else {

    $note = $db->query('SELECT * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

    authorize($note['user_id'] == $currentUserId);

    if (!$note) {
        abort();
    }

    

    view('notes/show.view.php', ['heading' => 'Note', 'note' => $note]);
}
