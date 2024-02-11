<?php

require 'functions.php';
// require 'router.php';

//connect to mysql db and execute query
class Database
{
    public function query($query)
    {
        $con = "mysql:host=localhost;port=3306;dbname=demo;user=root;charset=utf8mb4";
        $pdo = new PDO($con);

        $statement = $pdo->prepare($query);
        $statement->execute();

       return  $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database();

$posts = $db->query("select * from post");



foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
