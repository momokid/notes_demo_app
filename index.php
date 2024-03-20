<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';
$config = require('config.php');

$db = new Database($config['database']);

$id =$_GET['id'];
$query = "select * from post where id  = ?";

$posts = $db->query($query, [$id])->fetch();

dd($posts);
 
foreach ($posts as $post) {
    echo "<li><b>" . $post['title'] . "</b></li>";
}
