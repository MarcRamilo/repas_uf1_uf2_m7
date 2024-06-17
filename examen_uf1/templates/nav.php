<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<nav class="p-2 h3 d-flex justify-content-between bg-secondary align-items-center">
    <div class="left">
        <i class="bi bi-house text-white"> Fòrum Cirviànum</i>
    </div>
    <div class="mt-2 right text-white h5 align-self-center">
        <?php if(!isset($_SESSION['user_logged'])){ ?>
        <a class="text-white text-decoration-none" href="signup.php">Register | </a>
        <a class="text-white text-decoration-none" href="login.php">Login | </a>
        <?php }else{ ?>
        <a class="text-white text-decoration-none" href="home.php">Posts | </a>
        <a class="text-white text-decoration-none" href="contact.php">Contacte | </a>
        <a class="text-white text-decoration-none" href="index.php">Reset</a>
        <a class="text-white text-decoration-none" href="logout.php"> | Logout | </a>
        <?php } ?>
    </div>
</nav>

<body>
    <script src="jspopper.min.js" crossorigin="anonymous">
    </script>
     <script src = "js/bootstrap.min.js" crossorigin = "anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>