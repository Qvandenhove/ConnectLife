<?php
require('Models/Manager.php');
require('Models/CityManager.php');
require('Models/CustomerManager.php');
require('Models/SocietyManager.php');

function getVilles(){
    $codePostal = file_get_contents('php://input');
    $codePostal = json_decode($codePostal, true)['codePostal'];
    $cityManager = new CESI\ConnectLife\CityManager();
    $listeVilles = $cityManager->getCities($codePostal);
    echo json_encode($listeVilles,JSON_UNESCAPED_UNICODE);
}

function getCustomer($customerGUID){
    $customerManager = new CESI\ConnectLife\CustomerManager();
    $customer = $customerManager->getCustomer($customerGUID);
    return $customer;
}

function update($GUID){
    $customerManager = new CESI\ConnectLife\CustomerManager();
    $isSociety = getCustomer($GUID)['estSociete'];
    if($isSociety == '1'){
        $societyManager = new CESI\ConnectLife\SocietyManager();
        $societyManager->CreateSociety();
    }
}