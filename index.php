<?php
require_once('Controllers/front.php');
require_once('Controllers/back.php');

if (isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action ='';
}


switch($action){
    case 'form':
        $customer = getCustomer($_GET['client']);
        form($customer);
        break;

    case 'update':
        update($_GET["client"]);
        thanks();
        break;

    case 'getVilles':
        getVilles();
        break;

    case 'wrongMail':
        $customer = getCustomer($_GET['client']);
        wrongMail($customer);
        break;

    case 'get_clients':
        customer_XML();
        break;

    case 'get_XML':
        getCustomersForXML();
        break;

    default:
        if(isset($_GET['client'])){
            $customer = getCustomer($_GET['client']);
            home($customer);
        }else{
            lien_mort();
        }

}
