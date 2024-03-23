<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1 ;

$note = $db->query('SELECT * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

if(!$note){
    abort();
}

authorize($note['user_id'] == $currentUserId);

// if($note['user_id'] != $currentUserId){
//     abort(Response::FORBIDDEN);
// }

view('notes/show.view.php', ['heading' => 'Note', 'note' => $note]);

