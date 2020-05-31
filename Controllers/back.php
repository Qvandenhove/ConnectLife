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

function getCustomersForXML(){
    $customerManager = new CESI\ConnectLife\CustomerManager();
    $customerList = $customerManager->getCustomersForXML();
    return $customerList;
}

function update($GUID){
    $customerManager = new CESI\ConnectLife\CustomerManager();
    $userMail = getCustomer($GUID)['email'];
    if($_POST['email'] === $userMail){
        $isSociety = getCustomer($GUID)['estSociete'];
        if($isSociety == '1'){
            $societyManager = new CESI\ConnectLife\SocietyManager();
            $idsociete=$societyManager->CreateSociety($_POST["nomSociete"]);
            $customerManager->updateProfessional($GUID, $idsociete);
        }
        else{
            $customerManager->updateParticular($GUID);
        }
    }else{
        file_put_contents('Public/JSON/'.$_GET['client'],json_encode($_POST));
        header('Location: index.php?action=wrongMail&client='.$_GET['client']);
    }

}
