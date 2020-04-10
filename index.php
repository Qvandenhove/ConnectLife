<?php
require_once('Controllers/front.php');
require_once ('Controllers/back.php');

if (isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action ='';
}


switch($action){
    case 'form':
        form();
        break;

    case 'getVilles':
        getVilles();
        break;
    default:
        form();
}