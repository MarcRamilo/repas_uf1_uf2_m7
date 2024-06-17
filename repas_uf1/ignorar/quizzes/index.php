<?php 

    if(isset($_POST['sub_quizz'])){
        $respostes_correctes = 0;

        if(($_POST['q1']) == 2){
            $respostes_correctes++;
        }

        if(($_POST['q2']) == 1){
            $respostes_correctes++;
        }

        if(($_POST['q3']) == 2){
            $respostes_correctes++;
        }

        header("Location: login.php");
    }
    $_POST['nom'] ?? null;

   // condicio ? "si es compleix la condicio" : "el que vull retornar si no es compleix la condicio"

    $numero = 1;

    echo ($numero>2) ? "3 és mes gran que 2 " : " 3 és més petit que 2";

    //$nom = "PEPE";

    echo $nom ?? null;

    $num = "4";

    echo ($num === 4) ? "YESSSS" : "NOOOOOOO";


    


?>


<!doctype html>
<html lang="en">

<head>
  <title>Quizz</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    
<div class="contingut p-4 m-4 col-6 mx-auto bg-light">
        <h2 class="text-danger">MEGA QUIZZ</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" value="<?php echo $_POST['nom'] ?? null; ?>"
                class="form-control" name="nom" id="" aria-describedby="helpId" placeholder="Per exemple Héctor">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
        <hr>
            <div class="mb-3">
              <label for="cognom" class="form-label">Cognom</label>
              <input type="text" value="<?php echo $_POST['cognom'] ?? null; ?>"
                class="form-control" name="cognom" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <hr>
            <p>Quina és la capital de França?</p>
            <div class="form-check">
                <input class="<?php if(isset($_POST['sub_quizz'])) echo $_POST['q1'] == '1' ? 'border border-3 border-danger' : null ?> form-check-input" type="radio" name="q1" id="radio1" value="1" <?php if(isset($_POST['sub_quizz'])) echo $_POST['q1'] == '1' ? 'checked' : null ?>>
                <label class="form-check-label" for="radio1">
                    Ribes de Freser
                </label>
            </div>
            <div class="form-check">
                <input class="<?php if(isset($_POST['sub_quizz'])) echo $_POST['q1'] == '2' ? 'border border-3 border-success' : null ?> form-check-input" type="radio" name="q1" id="radio2" value="2">
                <label class="form-check-label" for="radio2">
                    París
                </label>
            </div>
            <div class="form-check">
                <input class="<?php if(isset($_POST['sub_quizz'])) echo $_POST['q1'] == '3' ? 'border border-3 border-danger' : null ?> form-check-input" type="radio" name="q1" id="radio3" value="3">
                <label class="form-check-label" for="radio3">
                    Barcelona
                </label>
            </div>
            <div class="form-check">
                <input class="<?php if(isset($_POST['sub_quizz'])) echo $_POST['q1'] == '4' ? 'border border-3 border-danger' : null ?> form-check-input" type="radio" name="q1" id="radio4" value="4">
                <label class="form-check-label" for="radio4">
                    Campdevànol
                </label>
            </div>

            <hr>

            <p>Best World Teacher</p>
            <div class="form-check">
                <input class="<?php if(isset($_POST['sub_quizz'])) echo $_POST['q2'] == '1' ? 'border border-3 border-success' : null ?> form-check-input" type="radio" name="q2" id="radio5" value="1">
                <label class="form-check-label" for="radio5">
                    True
                </label>
            </div>
            <div class="form-check">
                <input class="<?php if(isset($_POST['sub_quizz'])) echo $_POST['q2'] == '2' ? 'border border-3 border-danger' : null ?> form-check-input" type="radio" name="q2" id="radio6" value="2">
                <label class="form-check-label" for="radio6">
                    False
                </label>
            </div>

            <hr>

            <p>Best World FC Team</p>
            <div class="form-check">
                <input class="<?php if(isset($_POST['sub_quizz'])) echo $_POST['q3'] == '1' ? 'border border-3 border-success' : null ?> form-check-input" type="radio" name="q3" id="radio7" value="1">
                <label class="form-check-label" for="radio5">
                    FC Girona
                </label>
            </div>
            <div class="form-check">
                <input class="<?php if(isset($_POST['sub_quizz'])) echo $_POST['q3'] == '2' ? 'border border-3 border-danger' : null ?> form-check-input" type="radio" name="q3" id="radio8" value="2">
                <label class="form-check-label" for="radio6">
                    FC Barcelona
                </label>
            </div>
            


            <button type="submit" name="sub_quizz" class="btn btn-primary mt-4">Envia</button>

        </form>
        <?php
        if (isset($_POST['sub_quizz'])){
            echo "<p>Has encertat $respostes_correctes respostes</p>";
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