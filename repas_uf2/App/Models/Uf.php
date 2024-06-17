<?php

include_once("Orm.php");

class Uf extends Orm
{

    public function __construct()
    {
        parent::__construct('ufs');
        if (!isset($_SESSION['id_uf'])) {
            $_SESSION['id_uf'] = 1;
        }
    }
    public function getUfsByIdMp($id_mp){
        $ufs = [];
        foreach ($_SESSION['ufs'] as $uf) {
            if($uf['mp_id'] == $id_mp){
                $ufs[] = $uf;
            }
        }
        return $ufs;
    }
}
?>