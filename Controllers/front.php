<?php

function form($customer){
    require("Views/form.php");
}

function lien_mort(){
    require('Views/mort.php');
}


function home($customer){
    if ($customer == false){
        lien_mort();

    }else if($customer['update_clients'] == '1'){
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