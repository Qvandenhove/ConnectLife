<?php

function form($customer){
    if($customer['estSociete'] === '1'){
        require('Views/formPro.php');
    }else{
        require('Views/formPart.php');
    }

}
function home($customer){
    if ($customer == false){
        require('Views/mort.php') ;

    }else if(($customer['estSociete'] == '1' && sizeof($customer) >= 13) || ($customer['estSociete'] == '0' && sizeof($customer) >= 12)){
        echo 'formualaire déja rempli';
    }else{
        require('Views/accueil.php');
    }
}

function thanks(){
    require('Views/thanks.php');
}