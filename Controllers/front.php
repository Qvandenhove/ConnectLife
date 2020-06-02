<?php

function form($customer){
    require("Views/form.php");
}

function lien_mort(){
    require('Views/mort.php');
}


function home($customer){
    foreach($customer as $key=>$value){
        if($value === null || $value === ''){
            unset($customer[$key]);
        }
    }
    if ($customer == false){
        lien_mort();

    }else if(($customer['estSociete'] == '1' && sizeof($customer) >= 13) || ($customer['estSociete'] == '0' && sizeof($customer) >=12)){
        require('Views/deja_rempli.php');
    }else{
        require('Views/accueil.php');
    }
}

function wrongMail($client){
    $data = json_decode(file_get_contents('Public/JSON/'.$_GET['client']), true);
    require('Views/erreur.php');
}

function customer_XML(){
    require("Views/XML_database.php");
}

function thanks(){
    require('Views/thanks.php');
}