<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


if (isset($_POST['sub_quizz'])) {
    $respostes_correctes = 0;
    if (($_POST['q1']) == 2) {
        $respostes_correctes++;
    }

    if (($_POST['q2']) == 1) {
        $respostes_correctes++;
    }

    if (($_POST['q3']) == 2) {
        $respostes_correctes++;
    }

    if(isset($_POST['sub_quizz'])){
        if($_POST['q1'] == '3'){
            //pinta l'input de vermell
            //border border-3 border-danger
        }
    }

    if(isset($_POST['sub_quizz'])){
        if($_POST['q1'] == '2'){
            //pinta l'input de verd
        }
    }


}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Quizz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="contingut p-4 m-4 col-6 mx-auto bg-light">
        <h2 class="text-danger">MEGA QUIZZ</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <p>Quina és la capital de França?</p>
            <div class="form-check">
                <input class="<?php if(isset($_POST['sub_quizz'])) $_POST['q1'] == '1'  ? 'border border-3 border-danger' : null ?> form-check-input" type="radio" name="q1" id="radio1" value="1">
                <label class="form-check-label" for="radio1">
                    Ribes de Freser
                </label>
            </div>
            <div class="form-check">
                <input class="<?php echo (isset($_POST['sub_quizz']) && ($_POST['q1'] == 2)) ? 'bg-success border border-4  border-success' : null ?> form-check-input" type="radio" name="q1" id="radio2" value="2">
                <label class="form-check-label" for="radio2">
                    París
                </label>
            </div>
            <div class="form-check">
                <input class="<?php echo (isset($_POST['sub_quizz']) && ($_POST['q1'] == 3)) ? 'bg-danger border border-4 border-danger' : null ?> form-check-input" type="radio" name="q1" id="radio3" value="3">
                <label class="form-check-label" for="radio3">
                    Barcelona
                </label>
            </div>
            <div class="form-check">
                <input class="<?php echo (isset($_POST['sub_quizz']) && ($_POST['q1'] == 4)) ? 'bg-danger border border-4  border-danger' : null ?> form-check-input" type="radio" name="q1" id="radio4" value="4">
                <label class="form-check-label" for="radio4">
                    Campdevànol
                </label>
            </div>

            <hr>

            <p>Best World Teacher</p>
            <div class="form-check">
                <input class="<?php echo (isset($_POST['sub_quizz']) && ($_POST['q2'] == 1)) ? 'bg-success border border-4  border-success' : null ?> form-check-input" type="radio" name="q2" id="radio5" value="1">
                <label class="form-check-label" for="radio5">
                    Héctor
                </label>
            </div>
            <div class="form-check">
                <input class="<?php echo (isset($_POST['sub_quizz']) && ($_POST['q2'] == 2)) ? 'bg-danger border border-4 border-danger' : null ?> form-check-input" type="radio" name="q2" id="radio6" value="2">
                <label class="form-check-label" for="radio6">
                    Other
                </label>
            </div>

            <hr>

            <p>Best World FC Team</p>
            <div class="form-check">
                <input class="<?php echo (isset($_POST['sub_quizz']) && ($_POST['q3'] == 1)) ? 'bg-danger border border-4 border-danger' : null ?> form-check-input" type="radio" name="q3" id="radio7" value="1">
                <label class="form-check-label" for="radio5">
                    FC Barcelona
                </label>
            </div>
            <div class="form-check">
                <input class="<?php echo (isset($_POST['sub_quizz']) && ($_POST['q3'] == 2)) ? 'bg-success border border-4 border-success' : null ?> form-check-input" type="radio" name="q3" id="radio8" value="2">
                <label class="form-check-label" for="radio6">
                    FC Girona
                </label>
            </div>



            <button type="submit" name="sub_quizz" class="btn btn-primary mt-4">Envia</button>

        </form>
        <?php
        if (isset($respostes_correctes)) {

            echo '<p class="mt-3">Has aconseguit ' . $respostes_correctes . ' punts';
        }

        unset($respostes_correctes);
        ?>
    </div>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>