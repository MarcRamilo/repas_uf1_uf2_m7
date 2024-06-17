<?php
if (!isset($_SESSION)) session_start();

$_SESSION = array();

$_SESSION['id_usuaris'] = 1;
$_SESSION['id_blog'] = 1;

$blog = array(
    "id_blog" => $_SESSION['id_blog']++,
    "title" => "test",
    "description" => "hola aixo es un test",
    "data" => new DateTime("2023-10-09"),
    "user" => 2
);

$_SESSION['blogs'] = array();
$_SESSION['blogs'][] = $blog;

$user = array(
    "id_usuari" => $_SESSION['id_usuaris']++,
    "username" => "admin",
    "nom" => "Héctor",
    "cognoms" => "Ortiz",
    "pass" => "1234",
    "admin" => true
);


$_SESSION['users'] = array();

$_SESSION['users'][] = $user;

$user = array(
    "id_usuari" => $_SESSION['id_usuaris']++,
    "username" => "pepe",
    "nom" => "Pepe",
    "cognoms" => "Jiménez",
    "pass" => "1234",
    "admin" => false
);
$_SESSION['users'][] = $user;

$user = array(
    "id_usuari" => $_SESSION['id_usuaris']++,
    "username" => "maria",
    "nom" => "Maria",
    "cognoms" => "Creus",
    "pass" => "1234",
    "admin" => false
);



$_SESSION['users'][] = $user;



$room = array(
    "number" => "1",
    "pax" => "4",
);

$_SESSION['rooms'] = array();
$_SESSION['rooms'][] = $room;

$room = array(
    "number" => "2",
    "pax" => "2",
);

$_SESSION['rooms'][] = $room;

$room = array(
    "number" => "3",
    "pax" => "7",
);

$_SESSION['rooms'][] = $room;


$room = array(
    "number" => "4",
    "pax" => "5",
);

$_SESSION['rooms'][] = $room;


$room = array(
    "number" => "5",
    "pax" => "10",
);

$_SESSION['rooms'][] = $room;


$_SESSION['books'] = array();

$_SESSION['idBook'] = 1;
$in = new DateTime("2023-10-09");
$out = new DateTime("2023-10-09");
$out->add(new DateInterval('P5D'));


$book = array(
    "id" => $_SESSION['idBook']++,
    "room" => "1",
    "user" => "pepe",
    "pax" => "4",
    "date_in" => $in,
    "date_out" => $out,
    "confirmed" => false
);


$_SESSION['books'][] = $book;




$in = new DateTime("2023-10-15");
$out = new DateTime("2023-10-20");


$book = array(
    "id" => $_SESSION['idBook']++,
    "room" => "2",
    "user" => "pepe",
    "pax" => "2",
    "date_in" => $in,
    "date_out" => $out,
    "confirmed" => false
);


$_SESSION['books'][] = $book;

 
header("Location: ./login.php");
die();

?>