<?php
if (!isset($_SESSION)) session_start();
$_SESSION['flash'] ?? null;
if(isset($_POST['sub_login'])){
    foreach ($_SESSION['users'] as $users) {
       if ($users['username'] == $_POST['username']) {
        if ($users['password'] == $_POST['pass']) {
            $_SESSION['flash'] = "Usuari correctament iniciat";
            //find de user id by the name and password
            $user_id = array_search($users, $_SESSION['users']);
            $user_logged = array(
                "id" => $user_id,
                "username" => $_POST['username'],
                "password" => $_POST['pass']
            );         
            
            $_SESSION['user_logged'] = $user_logged;
            header('Location: index.php');
            unset($_SESSION['flash']);

        }
       }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <?php include_once('./templates/nav.php'); ?>
    <form class="col-10 col-md-6 col-xl-4 mx-auto border p-4 mt-5" action="" method="post">

        <h2>LogIn</h2>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" value="" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" class="form-control" name="pass" id="pass" aria-describedby="helpId" placeholder="">
        </div>


        <button type="submit" name="sub_login" class="btn btn-primary mt-2">LogIn</button>
        <button type="reset" class="btn btn-danger mt-2">Reset</button>
        <p class="mt-2">Are you not registered yet? <a href="./signup.php">Come on! Sign up!</a> </p>
    </form>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>