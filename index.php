<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';
$config = require('config.php');

$db = new Database($config['database']);

$posts = $db->query("select * from post")->fetchAll();

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
