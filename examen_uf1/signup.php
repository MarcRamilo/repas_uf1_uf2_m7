<?php
if (!isset($_SESSION)) session_start();
$empty="";
if (isset($_POST['sub_signup'])) {
    if (($_POST['pass1']) == $_POST['pass2']) {
        if($_POST['nom'] != $empty && $_POST['cognoms'] != $empty && $_POST['username'] != $empty && $_POST['pass1'] != $empty && $_POST['pass2'] != $empty  ){
        if (!isset($_SESSION['users'])) {
            $_SESSION['users'] = array();
        }
        $users = array(
            "id" => count($_SESSION['users']) + 1, // 'id' => '1
            "nom" => $_POST['nom'],
            "family_name" => $_POST['cognoms'],
            "username" => $_POST['username'],
            "password" => $_POST['pass1']
        );
        $_SESSION['users'] [] = $users;
        header('Location: login.php');
    } else {
        $missatge = "<p class='mx-auto bg-danger col-7'>Hi han camps buits</p>";
    }
} else {
    $missatge = "<p class='mx-auto bg-danger col-7'>Les cosntrassenyes no coinsidexen</p>";
    
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
    <?php 
        if(isset($missatge)){
            echo $missatge;
        }
    ?>
    <form class="col-10 col-md-8 col-lg-6 col-xl-4 mx-auto border p-4 mt-5" action="" method="post">
        <h2>Sign Up</h2>
        <div class="mb-3">
            <label for="nom" class="form-label">Name</label>
            <input type="text" value="" class="form-control" name="nom" id="nom" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
            <label for="cognoms" class="form-label">Family Name</label>
            <input type="text" value="" class="form-control" name="cognoms" id="cognoms" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" value="" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
            <label for="pass1" class="form-label">Password</label>
            <input type="password" class="form-control" name="pass1" id="pass1" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
            <label for="pass2" class="form-label">Password.. again!</label>
            <input type="password" class="form-control" name="pass2" id="pass2" aria-describedby="helpId" placeholder="">
        </div>


        <button type="submit" name="sub_signup" class="btn btn-primary mt-2">Desa</button>
        <button type="reset" class="btn btn-danger mt-2">Reset</button>
        <p class="mt-2">Are you already registered? <a href="./login.php">Come On! LogIn!!!</a> </p>
    </form>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>