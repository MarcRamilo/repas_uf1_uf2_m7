<?php  
function getUfsByMp($id_mp){
    $llista = array();
    foreach ($_SESSION['ufs'] as $uf) {
        if($uf['id_mp'] == $id_mp){
            $llista[] = $uf;
        }
    }
    return $llista;
}


?>