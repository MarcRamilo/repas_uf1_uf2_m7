<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['user_logged'])) {
    header("Location: login.php");
    die();
}
?>
<?php

if (isset($_POST['submit_blog'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $dataInput = $_POST['data'];
    $user = $_SESSION['user_logged']['id_usuari'];

    if (empty($title) || empty($description) || empty($dataInput)) {
        $missatge_error = "Falten camps per omplir";
        $_SESSION['flash']['ko'] = $missatge_error;
        header("Location: ./create.php");
        die();
    }
    $dataActual = new DateTime();
    $dataTransf = new DateTime($dataInput);      
    if ($dataTransf < $dataActual) {
        $missatge_error = "La data no pot ser anterior a la d'avui";
        $_SESSION['flash']['ko'] = $missatge_error;
        header("Location: ./create.php");
        die();
    }
    $blog = array(
        "id_blog" => $_SESSION['id_blog']++,
        "title" => $title,
        "description" => $description,
        "data" => $dataTransf,
        "user" => $user
    );

    $_SESSION['blogs'][] = $blog;

    header("Location: ./blog.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<?php include_once('templates/navbar.php') ?>

<body>
    <?php
    if (isset($_SESSION['flash']['ko'])) {
        $missatge = $_SESSION['flash']['ko'];
        echo "<div class='alert alert-danger'>$missatge</div>";
        unset($_SESSION['flash']['ko']);
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="col-7 mx-auto border p-4" method="post">
        <h1>Create blog</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="" value="<?php echo $_POST['title'] ?? null ?>" />
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="" value="<?php echo $_POST['description'] ?? null ?>" />
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Date</label>
            <input type="date" class="form-control" name="data" id="data" aria-describedby="helpId" placeholder="" value="<?php echo $_POST['data'] ?? null ?>" />
        </div>
        <input type="submit" name="submit_blog" value="Create" class="btn btn-primary" />
    </form>
    </div>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>