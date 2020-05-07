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

    default:
        home();
}
