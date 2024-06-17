<?php 
header('Location: home.php');

$user = array(
    "id" => 1,
    "username" => 'admin',
    "password" => 'test',
    "nom" => 'test',
    "cognoms" => 'test',
    "birthdate" => new DateTime('1990-01-01', new DateTimeZone('Europe/Madrid'))
);
$posts = array(
    "title" => 'Ttitle test',
    "content" => 'Content text test',
    "data" =>  new DateTime('now', new DateTimeZone('Europe/Madrid')),
    "user" => 1
);
$_SESSION['post'] [] = $post;


?>