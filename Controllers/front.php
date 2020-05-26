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

    }else if(($customer['estSociete'] == '1' && sizeof($customer) >= 13) || ($customer['estSociete'] == '0' && sizeof($customer) >=10 )){
        echo 'formualaire déja rempli';
    }else{
        require('Views/accueil.php');
    }
}

function wrongMail($client){
    echo 'Mail différent de celui que nous avons en base <a href="index.php?action=form&client='.$_GET['client'].'">Retour</a>';
}

function thanks(){
    require('Views/thanks.php');
}