<?php

function form($customer){
    require('Views/form.php');

}
function home($customer){
    foreach($customer as $key =>$element){
        if ($element == ''){
            unset($customer[$key]);
        }
    }
    if ($customer == false){
        echo 'lien mort';

    }else if(($customer['estSociete'] == '1' && sizeof($customer) >= 13) || ($customer['estSociete'] == '0' && sizeof($customer) >= 12)){
        echo 'formualaire déja rempli';
    }else{
        require('Views/accueil.php');
    }

}