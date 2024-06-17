<?php
if (!isset($_SESSION)) session_start();
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

if(!isset($_SESSION['users'])){
  $_SESSION['users'] = array();
}


if (isset($_POST['sub_signup'])) {
  $pass1 = $_POST['pass1'] ?? null;
  $pass2 = $_POST['pass2'] ?? null;
  if ($pass1 === $pass2) {
    //crearem un usuari i el guardarem a una llista i farem
    //redirecció a login.php

    $user = array(
      "username" => $_POST['username'],
      "nom" => $_POST['nom'],
      "cognoms" => $_POST['cognoms'],
      "birthdate" => DateTime::createFromFormat("Y-m-d", $_POST['birthdate']),
      "pass" => $_POST['pass1']
    );


    $_SESSION['users'] [] = $user;
    $_SESSION['flash'] = "L'usuari s'ha creat correctament";
    header("Location: ./login.php");
    die();


    //echo "<pre>";
    //print_r($user);
    //echo "</pre>";

  } else {
    //mostrarem un missatge d'error a sota del formulari
    //dient que les contrasenyes no coincideixen
    //No farem redirecció
    $missatge_flash = "Les contrasenyes no coincideixen";
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
  <?php include_once('templates/navbar.php') ?>

  <form class="col-7 mx-auto border p-4" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h2>Sign Up</h2>
    <div class="mb-3">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" value="<?php echo $_POST['nom'] ?? null; ?>" class="form-control" name="nom" id="nom" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="cognoms" class="form-label">Cognoms</label>
      <input type="text" value="<?php echo $_POST['cognoms'] ?? null; ?>" class="form-control" name="cognoms" id="cognoms" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" value="<?php echo $_POST['username'] ?? null; ?>" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="birthdate" class="form-label">Data de naixament</label>
      <input type="date" value="<?php echo $_POST['birthdate'] ?? null; ?>" class="form-control" name="birthdate" id="birthdate" aria-describedby="helpId" placeholder="">

    </div>

    <div class="mb-3">
      <label for="pass1" class="form-label">Contrasenya</label>
      <input type="password" class="form-control" name="pass1" id="pass1" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="pass2" class="form-label">Repeteix contrasenya</label>
      <input type="password" class="form-control" name="pass2" id="pass2" aria-describedby="helpId" placeholder="">
    </div>

    <?php
    if (isset($missatge_flash)) {
      echo "<div class='alert alert-danger'>$missatge_flash</div>";
      unset($missatge_flash);
    }
    ?>

    <button type="submit" name="sub_signup" class="btn btn-primary mt-2">Desa</button>
    <button type="reset" class="btn btn-danger mt-2">Reset</button>
    <p class="mt-2">Ja estàs registat? <a href="./login.php">Logueja't!!!</a> </p>
  </form>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>