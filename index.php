<!doctype html>
<html lang="en">
  <?php echo 'hello' ?>

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
<?php


    $persona = array(
        "Nom" => "Héctor",
        "Cognom" => "Ortiz",
        "Edat" => 43
    );



    $llista_persones  [] = $persona;

    echo '<pre>';
        var_dump($llista_persones);
    echo '</pre>';

    $persona = array(
        "Nom" => "Pepe",
        "Cognom" => "Perez",
        "Edat" => 34
    );

    $llista_persones [] = $persona;


    $llista_persones[] = array(
        "Nom" => "Maria",
        "Cognom" => "Lopez",
        "Edat" => 33
    );

    echo '<pre>';
    print_r($llista_persones);
    echo '</pre>';

    foreach ($llista_persones as $p) {
        echo '<p>' . $p['Nom'] . ' ' . $p['Cognom'];
    }


    $llista_persones = array(
      3,"Paraula",array(
        5,2,7,78,9
      )
    );
    echo '<pre>';
    echo print_r($llista_persones[2]);
    echo '</pre>';


    
?>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>