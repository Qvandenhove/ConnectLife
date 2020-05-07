<?php

function form($customer){
    if($customer['estSociete'] === '1'){
        require('Views/formPro.php');
    }else{
        require('Views/formPart.php');
    }

}
function home(){
    require('Views/accueil.php');
}

function thanks(){
    require('Views/thanks.php');
}