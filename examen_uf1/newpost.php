<?php 

if (!isset($_SESSION)) session_start();

$data_avui = new DateTime('now');
if(!isset($_SESSION['post'])){
    $_SESSION['post'] = array();
}
if(isset($_POST['sub_new_post'])){
    $post = array(
        "id" => count($_SESSION['post']) + 1,
        "title" => $_POST['title'],
        "content" => $_POST['content'],
        "data" =>  $data_avui,
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<?php include_once('./templates/nav.php');?>
<form class="col-10 col-md-8 col-xl-6 mx-auto border p-4 mt-4" action="" method="post">


<h2>Nou Post</h2>

<div class="mb-3">
<label for="title" class="form-label">Títol</label>
<input type="text" value="" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Títol del post...">
</div>

<div class="mb-3">
  <label for="" class="form-label">Contingut del post</label>
  <textarea class="form-control" name="content" id="content" rows="3" placeholder="Contingut..."></textarea>
  <div class="mb-3">
  </div>
</div>


<button type="submit" name="sub_new_post" class="btn btn-primary mt-2">Afegeix</button>
<button type="reset" class="btn btn-danger mt-2">Reset</button>
</form>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>