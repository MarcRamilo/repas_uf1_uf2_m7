<?php

class ufController extends Controller
{

    public function index()
    {
        $params = null;
        $this->render("home/index", $params, "site");
    }

    public function create()
    {
        $mpModel = new Mp();
        $ufModel = new Uf();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            unset($_GET['id']);
        }
        // } elseif (isset($_SESSION['id'])) {
        //     $id = $_SESSION['id'];
        //     unset($_SESSION['id']);
        // } else {
        //     $id = null;
        // }

        $params['mp'] = $mpModel->getById($id);
        $params['ufs'] = $ufModel->getUfsByIdMp($id);
        $params['title'] = "Crear UF";
        $this->render("uf/create", $params, "main");
    }
    public function store()
    {
        $ufModel = new Uf();
        $uf = array(
            "id" => $_SESSION['id_uf']++,
            "num_uf" => $_POST['num_uf'],
            "nom_uf" => $_POST['nom_uf'],
            "hores_uf" => $_POST['hores_uf'],
            "mp_id" => $_POST['mp_id']
        );
        $ufModel->create($uf);

        //$_SESSION['id'] = $uf['mp_id'];
        header("Location: /uf/create/?id=" . $uf['mp_id']);
    }
    public function destroy()
    {
        $id = $_GET['id'];
        $ufModel = new Uf();
        $uf = $ufModel->getById($id);
        $ufModel->removeItemById($id);
        header("Location: /uf/create/?id=" . $uf['mp_id']);
    }
}
