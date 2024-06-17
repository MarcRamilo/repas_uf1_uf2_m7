<?php
if (!isset($_SESSION)) session_start();
// if (!isset($_SESSION['user_logged'])) {
//     header("Location: login.php");
//     die();
// }

if (isset($_POST['delete_blog'])) {
    $id_blog = $_POST['id_blog'];
    foreach ($_SESSION['blogs'] as $key => $blog) {
        if ($blog['id_blog'] == $id_blog) {
            unset($_SESSION['blogs'][$key]);
        }
    }
    header("Location: ./blog.php");
    die();
}

if (isset($_POST['update_blog'])) {
    # code...
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
    <?php include_once('templates/navbar.php') ?>
    <?php
    if (isset($_SESSION['user_logged'])) {
    ?>
        <a href="./create.php" class="btn btn-primary">Create new post</a>

    <?php
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Blog</h1>
                <div class="row">
                    <div class="col-4">
                        <?php foreach ($_SESSION['blogs'] as $blog) { ?>
                            <div class="card">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo $blog['title'] ?></h5>
                                    <p class="card-text"><?php echo $blog['description'] ?></p>
                                    <p class="card-text"><?php echo $blog['data']->format('Y-m-d H:i:s'); ?></p>
                                    <?php if ($_SESSION['user_logged']['id_usuari'] == $blog['user']) {
                               
                                    ?>
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                            <input type="hidden" name="id_blog" value="<?php echo $blog['id_blog'] ?>">
                                            <input type="submit" name="delete_blog" value="Delete" class="btn btn-danger">
                                        </form>
                                        <a href="./update.php?id_blog=<?php echo $blog['id_blog'] ?>" class="btn btn-warning">Update</a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>