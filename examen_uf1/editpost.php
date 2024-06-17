<?php
//edit post
if (!isset($_SESSION)) session_start();

$postSaved =[];

if (isset($_SESSION['post'], $_GET['id'])) {
    foreach ($_SESSION['post'] as $key => $post) {
        if ($post['id'] == $_GET['id']) {
            // Update the session with the modified post
            $_SESSION['post'][$key] = $post;
            // Save the modified post to $postSaved for later use or verification
            $postSaved = $post;

        }
    }
}

if(isset($_POST['sub_new_post'])){
    $post = array(
        "id" => count($_SESSION['post']) + 1,
        "title" => $_POST['title'],
        "content" => $_POST['content'],
        "data" =>  $postSaved['data'] ?? new DateTime('now'),
        "usuari" => $_SESSION['user_logged']['id']
    );
    $_SESSION['post'] [] = $post;
    header('Location: home.php');

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
    <?php include_once('./templates/nav.php'); ?>
    <form class="col-10 col-md-8 col-xl-6 mx-auto border p-4 mt-4" action="" method="post">


        <h2>Edit Post</h2>
        <div class="mb-3">
            <label for="title" class="form-label">Títol</label>
            <input type="text" value="" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Títol del post..." value="<?php echo $postSaved['title'] ?? null?>">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Contingut del post</label>
            <textarea class="form-control" name="content" id="content" rows="3" placeholder="Contingut..." value="<?php echo $postSaved['content'] ?? null?>"></textarea>
            <div class="mb-3">
            </div>
        </div>


            <button type="submit" name="sub_new_post" class="btn btn-primary mt-2">Edit</button>
            <button type="reset" class="btn btn-danger mt-2">Reset</button>
    </form>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-5Z5Zg5l5z" crossorigin="anonymous"></script>
</body>

</html>