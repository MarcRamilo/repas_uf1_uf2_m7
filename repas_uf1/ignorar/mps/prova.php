<?php
session_start();
include_once("fun/fun.php");


    $_SESSION['mps'] = array();



    $_SESSION['ufs'] = array();



    $_SESSION['ids_mp']=1;



    $_SESSION['ids_uf']=1;



$mp = array(
    "id_mp" => $_SESSION['ids_mp']++,
    "num_mp" => '1',
    "nom_mp" => 'SISTEMES INFORMÀTICS'
  );

  $_SESSION['mps'] [] = $mp;

  $mp = array(
    "id_mp" => $_SESSION['ids_mp']++,
    "num_mp" => '2',
    "nom_mp" => 'BBDD'
  );

  $_SESSION['mps'] [] = $mp;

  $mp = array(
    "id_mp" => $_SESSION['ids_mp']++,
    "num_mp" => '3',
    "nom_mp" => 'PROGRAMACIÓ'
  );

  $_SESSION['mps'] [] = $mp;

  $uf = array(
    "id_uf" => $_SESSION['ids_uf']++,
    "num_uf" => '1',
    "nom_uf" => 'UF1 de sistemes',
    "id_mp" => '1'
  );

  $_SESSION['ufs'] [] = $uf;

  $uf = array(
    "id_uf" => $_SESSION['ids_uf']++,
    "num_uf" => '2',
    "nom_uf" => 'UF2 de sistemes',
    "id_mp" => '1'
  );

  $_SESSION['ufs'] [] = $uf;

  $uf = array(
    "id_uf" => $_SESSION['ids_uf']++,
    "num_uf" => '1',
    "nom_uf" => 'UF1 de BBDD',
    "id_mp" => '2'
  );

  $_SESSION['ufs'] [] = $uf;


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  
    <div class="accordion" id="accordionExample">
  
    <?php 
    foreach ($_SESSION['mps'] as $mp) {
        # code...
        ?>
    
    
    <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $mp['id_mp'] ?>" aria-expanded="true" aria-controls="collapse<?php echo $mp['id_mp'] ?>">
        <?php echo $mp['nom_mp'] ?>
      </button>
    </h2>
    <div id="collapse<?php echo $mp['id_mp'] ?>" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <?php 
        $ufs = getUfsByMp($mp['id_mp']);
        foreach ($ufs as $uf) {
            echo "<p>" . $uf['nom_uf'] . "</p>";
        }
        ?>
      </div>
    </div>

    <?php 
    }
    ?>


  </div>







</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>