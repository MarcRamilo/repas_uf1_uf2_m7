<?php


if (isset($_POST['sub_dades'])) {

  $nom = $_POST['form_nom'];
  $cognom = $_POST['form_cognom'];
  $edat = $_POST['form_edat'];



  if ($edat > 17) {
    $resultat = "<p style='color: green;'>Bona tarda $nom $cognom. Pots conduir";
  } else {
    $resultat = "<p style='color: red;'>Bona tarda $nom $cognom. No pots conduir";
  }
}


echo '<br>';

if (isset($_POST['sub_frase'])) {

  $frase = $_POST['form_frase'];
  $mida = strlen($frase);
  $resultat = "<p style='color: blue;'>Bona tarda la mida del string es $mida";
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

  <div id="contingut" class="d-flex justify-content-around">

    <form class="m-4 p-4 border bg-light col-4" action="ex.php" method="post">
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="form_nom" id="nom" aria-describedby="helpId" placeholder="El teu nom..">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>

      <div class="mb-3">
        <label for="cognom" class="form-label">Cognom</label>
        <input type="text" class="form-control" name="form_cognom" id="cognom" aria-describedby="helpId" placeholder="El teu cognom..">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>

      <div class="mb-3">
        <label for="edat" class="form-label">Edat</label>
        <input type="number" class="form-control" name="form_edat" id="edat" aria-describedby="helpId" placeholder="La teva edat..">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>

      <button type="submit" name="sub_dades" class="btn btn-primary">Envia</button>



    </form>


    <form class="m-4 p-4 border bg-light col-4" action="" method="post">

      <div class="mb-3">
        <label for="frase" class="form-label">Escriu una frase</label>
        <input type="text" class="form-control" name="form_frase" id="frase" aria-describedby="helpId" placeholder="">
        <small id="helpId" class="form-text text-muted">Escriu una frase i jo contaré els caracters</small>
      </div>

      <button type="submit" name="sub_frase" class="btn btn-primary">Submit</button>

    </form>
  </div>

  <div id="resultat" class="col-8 mx-auto bg-light">
    <?php
    if (isset($_POST['sub_dades']) || isset($_POST['sub_frase'])) {
      echo $resultat;
    }

    ?>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>