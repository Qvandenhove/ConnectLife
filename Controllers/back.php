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
    $list_clients = $customerList->fetchAll(PDO::FETCH_ASSOC);
    if(sizeof($list_clients) != 0){
        $XMLFile = new DOMDocument("1.0", "utf-8");
        $XMLFile->appendChild($clients = $XMLFile->createElement('clients'));
        foreach($list_clients as $client){
            $clients->appendChild($XML_client = $XMLFile->createElement('client'));
            $XML_client->setAttribute('GUIDClient',$client['GUIDClient']);
            $XML_client->setAttribute("xmlns:xsi","http://www.w3.org/2001/XMLSchema-instance");
            $XML_client->setAttribute("xsi:noNamespaceSchemaLocation","../listeClients.xsd");
            unset($client["GUIDClient"]);
            unset($client["statut_XML"]);
            foreach($client as $key=>$attribute){
                $XML_client->appendChild($XMLFile->createElement($key, $attribute));
            }
        }

        $XMLFile->formatOutput = true;
        if (file_exists('Public/XML/' . date('d-m-Y'))){
            $name = 'listeClients'. strval(sizeof(scandir('Public/XML/' . date('d-m-Y') . '/'))) . '.xml';
            $path = 'Public/XML/' . date('d-m-Y') . '/'. $name;
            $XMLFile->save($path);

        }else{
            mkdir('Public/XML/' . date('d-m-Y'));
            $name = $name = 'listeClients.xml';
            $path = 'Public/XML/' . date('d-m-Y') . '/'. $name;
            $XMLFile->save('Public/XML/' . date('d-m-Y') . '/listeClients.xml');
        }
        echo json_encode(array('path' => $path, 'name' => $name));

    }else{
        echo json_encode(array('path' => false, 'name' => false));
    }
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
        if(file_exists('Public/JSON/') == false){
            mkdir('Public/JSON/');
        }
        file_put_contents('Public/JSON/'.$_GET['client'],json_encode($_POST));
        header('Location: index.php?action=wrongMail&client='.$_GET['client']);
    }

}
