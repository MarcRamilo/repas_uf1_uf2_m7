<?php
if (!isset($_SESSION)) session_start();
include_once("./fun/fun.php");

$dt = new DateTime("now",new DateTimeZone("Europe/Madrid"));

echo date_format($dt,"d-m-Y");

if (isset($_POST['sub_signin'])) {

  $id_usuari = $_POST['id_user'];




  if (is_null($resposta)) {
    //login fail
    $missatge_error = "Credencials incorrectes";
  } else {
    //login success
    $_SESSION['user_logged'] = $resposta;
    header("Location: ./welcome.php");
    die();
  }

  //comprobar les credencials
  //si són correctes redirigir a home.php
  //si no són correctes carregarem de nou el formulari
  //i mostrarem un missatge flash
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
  <?php
  if (isset($_SESSION['flash'])) {
    $missatge = $_SESSION['flash'];
    echo "<div class='alert alert-success'>$missatge</div>";
    unset($_SESSION['flash']);
  }

  if (isset($missatge_error)) {
    echo "<div class='alert alert-danger'>$missatge_error</div>";
    unset($missatge_error);
  }
  ?>
  <form class="col-7 mx-auto border p-4" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h2>LogIn</h2>

    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" value="<?php echo $_POST['username'] ?? null; ?>" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
      
      
      <input type="hidden" name="id_usuari" value="<?php echo $usuari['id_user'] ?>">
    </div>

    <div class="mb-3">
      <label for="pass" class="form-label">Contrasenya</label>
      <input type="password" class="form-control" name="pass" id="pass" aria-describedby="helpId" placeholder="">
    </div>

    <?php
    if (isset($missatge_flash)) {
      echo "<div class='alert alert-danger'>$missatge_flash</div>";
      unset($missatge_flash);
    }
    ?>

    <button type="submit" name="sub_signin" class="btn btn-primary mt-2">LogIn</button>
    <button type="reset" class="btn btn-danger mt-2">Reset</button>
    <p class="mt-2">Encara no estàs registrat? <a href="./signup.php">Registra't imbècil!</a> </p>
  </form>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>