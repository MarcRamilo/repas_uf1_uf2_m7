<!doctype html>

<?php


if (isset($_POST['sub_quizz'])) {
    $resultat = false;
    if (isset($_POST['opcio'])) {
        if ($_POST['opcio'] == 2) {
            $resultat = true;
        }
    }
}




// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

?>


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

    <div class="contingut p-4 m-4 col-5 mx-auto bg-light">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <p>Quina és la capital de França?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="opcio" id="radio1" value="1">
                <label class="form-check-label" for="radio1">
                    Ribes de Freser
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="opcio" id="radio2" value="2">
                <label class="form-check-label" for="radio2">
                    París
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="opcio" id="radio3" value="3">
                <label class="form-check-label" for="radio3">
                    Barcelona
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="opcio" id="radio4" value="4">
                <label class="form-check-label" for="radio4">
                    Campdevànol
                </label>
            </div>

            <button type="submit" name="sub_quizz" class="btn btn-primary mt-3">Envia</button>

        </form>
        <?php
        if (isset($resultat)) {
            
            if(!isset($_POST['opcio'])){
                echo "<p style='color: blue;'>Cap resposta seleccionada<p>";
            }else{  
                if ($resultat) {
                    //mostrare missatge verd
                    echo "<p style='color: green;'>Resposta correcta<p>";
                } else {
                    echo "<p style='color: red;'>Resposta incorrecta<p>";
                    //mostrare missatge vermell
                }
            }
            

            unset($resultat);
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