<?php

function form($customer){
    require('Views/form.php');

}
function home($customer){
    foreach($customer as $key=>$value){
        if($value === null || $value === ''){
            unset($customer[$key]);
        }
    }
    if ($customer == false){
        require('Views/mort.php') ;

    }else if(($customer['estSociete'] == '1' && sizeof($customer) >= 13) || ($customer['estSociete'] == '0' && sizeof($customer) >=12)){
        echo 'formualaire déja rempli';
    }else{
        require('Views/accueil.php');
    }
}

function wrongMail($client){
    $data = json_decode(file_get_contents('Public/JSON/'.$_GET['client']), true);
    require('Views/erreur.php');
}

function thanks(){
    require('Views/thanks.php');
}