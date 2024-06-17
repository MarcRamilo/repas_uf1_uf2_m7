<?php
session_start();
    // echo "<pre>";
    //   print_r($_POST);
    // echo "</pre>";

    
    if(!isset($_SESSION['llista_mps'])){
      
      $_SESSION['llista_mps'] = array();
    }
    

    if(isset($_POST['sub_desa_mp'])){
        $mp = array(
          "num_mp" => $_POST['num_mp'],
          "nom_mp" => $_POST['nom_mp']
        );

        $_SESSION['llista_mps'] [] = $mp;



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

<div class="contenidor col-6 m-4 p-4 bg-light border mx-auto">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>New MP</h2>
        
        <div class="mb-3">
          <label for="input_number_mp" class="form-label">Número de MP</label>
          <input type="number"
            class="form-control" name="num_mp" id="input_number_mp" aria-describedby="helpId" placeholder="Per exemple 1">
          <small id="helpId" class="form-text text-muted">El número de MP ha de ser únic</small>
        </div>

        <div class="mb-3">
          <label for="input_name_mp" class="form-label">Nom del Mòdul Professional</label>
          <input type="text"
            class="form-control" name="nom_mp" id="input_name_mp" aria-describedby="helpId" placeholder="Per exemple Sistemes...">
          <small id="helpId" class="form-text text-muted">El nom no pot superar els 256 caracters....</small>
        </div>

        <button type="submit" value="jdshgf" name="sub_desa_mp" class="btn btn-primary">Desa</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    


    </form>

    </div>

    <div class="llistat col-6 mx-auto border">
      <?php 
      foreach ($_SESSION['llista_mps'] as $mp) {
        echo '<p>MP' . $mp['num_mp'] . " -> " . $mp['nom_mp'] . '</p>';
      }
      ?>

</div>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>