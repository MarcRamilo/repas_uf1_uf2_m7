<?php
if (!isset($_SESSION)) session_start();
unset($_SESSION['user_logged']);
header('Location: home.php');
?>