<?php
require_once('Controllers/front.php');
if (isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action ='';
}

switch($action){
    case 'form':
        form();
        break;

    default:
        home();
}