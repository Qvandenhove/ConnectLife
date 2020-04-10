<?php
require('Models/Manager.php');
require('Models/CityManager.php');


function getVilles($codePostal){
    $cityManager = new CESI\ConnectLife\CityManager();
    $listeVilles = $cityManager->getCities($codePostal);
    echo json_encode($listeVilles,JSON_UNESCAPED_UNICODE);
}