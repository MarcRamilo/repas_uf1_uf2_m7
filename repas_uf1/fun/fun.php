<?php 
    function check_user($username,$pass){
        foreach ($_SESSION['users'] as $key => $user) {
            if($username==$user['username']){
                if($pass==$user['pass']){
                    //credencials són ok
                    return $_SESSION['users'][$key];
                }
            }
        }

        return null;
    }
?>
