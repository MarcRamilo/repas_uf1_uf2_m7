<?php

include_once 'App/Models/Rent.php';
include_once 'App/Models/Scooter.php';

class rentController extends Controller
{

    public function store()
    {
        $id = $_GET['id_scooter'] ?? null;
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

                $rent = [
                    'id_scooter' => $scooter['id'],
                    'id_user' => $_SESSION['user']['id'],
                    'start' => date('Y-m-d H:i:s'),
                ];
                $rentModel->insert($rent);
                $_SESSION['flash']['ok'] = "Scooter rented";
                header("Location: /scooter/index");
                die();
            } else {
                $_SESSION['flash']['ko'] = "Scooter not found";
                header("Location: /scooter/index");
                die();
            }
        }
    }

    public function finish()
    {
        $id = $_GET['id_scooter'] ?? null;
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
                    // Finish rent here
                    $rent['end'] = date('Y-m-d H:i:s');
                
                    // Assuming $rent['start'] is in 'Y-m-d H:i:s' format and $scooter['price_per_day'] is set
                    $startDate = new DateTime($rent['start']);
                    $endDate = new DateTime($rent['end']);
                    $interval = $startDate->diff($endDate);
                    $daysRented = $interval->days;
                
                    // If the rental period is less than one day, consider it as one day
                    $daysRented = ($daysRented == 0) ? 1 : $daysRented;
                
                    // Calculate price
                    $price = $daysRented * $scooter['price'];
                    $rent['price'] = $price;
                    $rent['end'] = date('Y-m-d H:i:s');
                    // Update the rent record with the end date and price
                    $rentModel->insert($rent); // Assuming there's an update method to handle existing records
                
                    $_SESSION['flash']['ok'] = "Scooter returned successfully. Total price: $" . $price;
                    header("Location: /scooter/index");
                    die();
                } else {
                    $_SESSION['flash']['ko'] = "Scooter not rented";
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


    public function index()
    {

        $params['user'] = $_SESSION['user'] ?? null;

        if ($params['user'] == null) {
            header("Location: /main/index");
            die();
        } else {
            $rentModel = new Rent();
            $rents = $rentModel->getAll();
            $scooterModel = new Scooter();
            $scooters = $scooterModel->getAll();
            $params['rents'] = $rents;
            $params['scooters'] = $scooters;
            if (isset($_SESSION['flash'])) {
                $params['flash'] = $_SESSION['flash'];
                unset($_SESSION['flash']);
            }
            $this->render("rent/index", $params, "site");
        }
    }
}
