<?php
class mpController extends Controller
{

    public function index()
    {
        $mpModel = new Mp();
        $params['title'] = "Home";
        $params['llista'] = $mpModel->getAll();
        $this->render("mp/index", $params, "main");
    }

    public function store()
    {
        $mpModel = new Mp();

        $num_mp = $_POST['num_mp'];
        $nom_mp = $_POST['nom_mp'];

        $mp = [
            "id" => $_SESSION['id_mp']++,
            "num_mp" => $num_mp,
            "nom_mp" => $nom_mp
        ];

        // $mpModel->reset();
        $mpModel->create($mp);
        header("Location: /mp/index");
    }
    public function destroy()
    {
        $mpModel = new Mp();
        $id = $_GET['id'];
        $mpModel->removeItemById($id);
        header("Location: /mp/index");
    }
    public function update()
    {

        $mpModel = new Mp();
        $id = $_GET['id'] ?? null;
        $params['mp'] = $mpModel->getById($id);

        $this->render("mp/update", $params, "main");
    }

    public function modify()
    {
        $mpModel = new Mp();

        $mp = [
            "id" => $_POST['id'],
            "num_mp" => $_POST['num_mp'],
            "nom_mp" => $_POST['nom_mp']
        ];

        $mpModel->updateItemById($mp);

        header("Location: /mp/index");
    }
}
