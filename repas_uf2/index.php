<?php
//$_SESSION = [];
if (!isset($_SESSION)) {
    session_start();
}
include_once("App/config.php");
include_once("App/Router.php");

include_once("App/Models/User.php");
include_once("App/Models/Mp.php");
include_once("App/Models/Uf.php");
include_once("App/Core/Controller.php");

$r = new Router();
$r->run();
