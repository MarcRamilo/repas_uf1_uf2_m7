<?php
if (!isset($_SESSION)) session_start();


?>
<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<?php include_once('./templates/nav.php'); ?>
<?php if (isset($_SESSION['user_logged'])) { ?>
    <div class="add d-flex justify-content-end my-3">
        <a class="btn btn-success" href="newpost.php">Nou Post</a>
    </div>
<?php } ?>

<body>
    <?php if (!isset($_SESSION['user_logged'])) { ?>
        <h3 class="text-center text-danger">Hola convidat, registra't i logueja't per poder comentar!</h3>
    <?php } else { ?>
        <h3 class='text-center text-danger'> Hola
            <?php echo $_SESSION['user_logged']['username'] ?>
        <?php } ?>
        <div class="list border p-3 bg-secondary">
            <?php
            if (isset($_SESSION['post'])) {
                foreach ($_SESSION['post'] as $post) {

            ?>
                    <div class="post p-2 my-3">
                        <div class="mainPost bg-light p-3">
                            <div class="headerPost d-flex justify-content-between ">
                                <div class="title col-9">
                                    <h3><?php echo $post['title']; ?></h3>
                                </div>

                            </div>
                            <div class="content">
                                <p><?php echo $post['content']; ?></p>
                            </div>
                            <div class="author">
                                <small class="text-dark">By
                                    <?php
                                    // echo '<pre>';
                                    // var_dump($_SESSION['users']);
                                    // echo '</pre>';
                                    // echo '<pre>';
                                    // var_dump($post['usuari']);
                                    // echo '</pre>';
                                    foreach ($_SESSION['users'] as $user) {
                                        if ($user['id'] == $post['usuari']) {
                                            $user['username'] = $name;
                                        }
                                    }
                                    ?>
                                    <?php
                                    if (isset($name)) { // Check if $name is set
                                        echo $name; // Now $name is defined before being used
                                    } else {
                                        echo "Username not found"; // Fallback message if $name is not set
                                    }

                                    echo $post['data']->format("Y-M-d H:i:s");
                                    ?>
                                </small>
                                <?php if (isset($_SESSION['user_logged'])) { ?>
                                  
                                    <div class="actions d-flex justify-content-between mt-2">
                                        <a href="editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-warning">Edit</a>
                                        <a href="deletepost.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="accordion accordion-flush mt-1" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Comentaris (2)

                                    </button>
                                </h2>
                        <?php }
                } ?>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
                        </script>

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
                        </script>
</body>

</html>