<?php 
//delete post
if (!isset($_SESSION)) session_start();
if (isset($_SESSION['post'])) {
    foreach ($_SESSION['post'] as $key => $post) {
        if ($post['id'] == $_GET['id']) {
            unset($_SESSION['post'][$key]);
            header('Location: home.php');
        }
    }
}
?>
