<?php
include_once(__DIR__ . "/../Models/Scooter.php");
include_once(__DIR__ . "/../Models/Rent.php");
include_once(__DIR__ . "/../Core/Store.php");

use Intervention\Image\ImageManager;

class scooterController extends Controller
{

    public function index()
    {
        
        $params['user'] = $_SESSION['user'] ?? null;
        
        if($params['user'] == null){
            header("Location: /main/index");
            die();
        }else{
            $scooterModel = new Scooter();
            $scooters = $scooterModel->getAll();

            foreach ($scooters as $key => $scooter) {
                $rentModel = new Rent();
                $rent = $rentModel->getRentByIdScooter($scooter['id']);
                if ($rent) {
                    $scooters[$key]['rent'] = $rent;
                }
            }

            $params['scooters'] = $scooters;

            if (isset($_SESSION['flash'])) {
                $params['flash'] = $_SESSION['flash'];
                unset($_SESSION['flash']);
            }
    
            if (isset($_SESSION['post'])) {
                $params['post'] = $_SESSION['post'];
                unset($_SESSION['post']);
            }
            $this->render("scooter/index", $params, "site");
        }
        }


    public function destroy()
    {
        $id = $_GET['id'] ?? null;
        if ($id == null) {
            $_SESSION['flash']['ko'] = "Scooter not found";
            header("Location: /scooter/index");
            die();
        } else {
            $scooterModel = new Scooter();
            $scooter = $scooterModel->getById($id);
            if ($scooter) {
                $rentModel = new Rent();
                $rent = $rentModel->getRentByIdScooter($scooter['id']);
                if ($rent) {
                    $_SESSION['flash']['ko'] = "Scooter is rented";
                    header("Location: /scooter/index");
                    die();
                } else {
                    $scooterModel->deleteById($id);
                    $_SESSION['flash']['ok'] = "Scooter deleted";
                    header("Location: /scooter/index");
                    die();
                }
            } else {
                $_SESSION['flash']['ko'] = "Scooter not found";
                header("Location: /scooter/index");
                die();
            }
        }
    }

    public function store()
    {
        $post = $_POST;
        $scooterModel = new Scooter();
        $scooter = $scooterModel->getById($post['brain']);
        if ($scooter) {
            $_SESSION['flash']['ko'] = "Scooter already exists";
            $_SESSION['post'] = $post;
            header("Location: /scooter/index");
            die();
        } else {
            $scooter = new Scooter();
            if(empty($post['brain']) || empty($post['model']) || empty($post['price'])){
                $_SESSION['flash']['ko'] = "All fields are required";
                $_SESSION['post'] = $post;
                header("Location: /scooter/index");
                die();
            }
            $scooter = [
                'brain' => $post['brain'],
                'model' => $post['model'],
                'price' => $post['price'],
                'img' => $post['brain']
            ];
            //get all
            //save image
            $array = explode(".", $_FILES['img']['name']);
            $extension = $array[count($array) - 1];

            
            $nameImg = "scooter - " . uniqid() .  "." . $extension;

            $src = $_FILES['img']['tmp_name'];
            $dst = "scooters";

            if(Store::store($src, $dst, $nameImg)){

            $scooterModel->insert($scooter);
            $_SESSION['flash']['ok'] = "Scooter created";
            header("Location: /scooter/index");
            die();
            }
            else{
                $_SESSION['flash']['ko'] = "Error creating scooter";
            }
        }
      
    }
}

