<?php 

$llista = array();



$avui = new DateTime('now',new DateTimeZone('Europe/Madrid'));
$llista [] = $avui;

$data_naixament_string="2005-3-15";
$datanaixament = new DateTime($data_naixament_string);

$llista [] = $datanaixament;

$data_naixament_string="15-02-1980";
$datanaixament2 = DateTime::createFromFormat("d-m-Y",$data_naixament_string);

$llista [] = $datanaixament2;

$data_naixament_string="15-02-2004";
$datanaixament3 = DateTime::createFromFormat("d-m-Y",$data_naixament_string);

$llista [] = $datanaixament3;

$dataInicial = new DateTime("1980-1-1");
$dataFi = new DateTime("2029-1-1");

foreach ($llista as $dt) {
    if($dt>$dataInicial && $dt<$dataFi){

        echo date_format($dt,"d/m/Y");
        echo "<br>";
    }
}





?>