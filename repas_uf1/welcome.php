<?php
if (!isset($_SESSION)) session_start();
if(!isset($_SESSION['user_logged'])){
    header("Location: login.php");
    die();
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<?php include_once('templates/navbar.php') ?>




    <h1>Welcome <?php echo $_SESSION['user_logged']['nom'] . ' ' . $_SESSION['user_logged']['cognoms'] ?></h1>

    <?php 
    echo '<pre>';
    var_dump($_SESSION['user_logged']);
    echo '</pre>';
    $ara = new DateTime('now', new DateTimeZone('Europe/Madrid'));
    $dataNaixament = $_SESSION['user_logged']['birthdate'];
    
    $d = $ara->diff($dataNaixament);
    
    echo "La diferència és: " . $d->y . ' anys i ' . $d->m . ' mesos.';
    
    if(($d->y)>17){
      echo "Ets major d'edat";
    }else{
      echo "Ets menor d'edat";
    }
    
    echo "<pre>";
    print_r($d);
    echo "</pre>";
    
    
    echo "<pre>";
    print_r($ara);
    echo "</pre>";
    
    ?>

    <a class="btn btn-primary" href="./blog.php">BLOG</a>


  
    <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>