<?php
$stylesheets = ['main'];
$civ = '';
if(file_exists('Public/JSON/'.$_GET['client'])){
    $data = json_decode(file_get_contents('Public/JSON/'.$_GET['client']),true);
    if(isset($data)){
        $civ = $data['civilite'];
    }
}else{
    $data= false;
    if(isset($customer['civilite']) && $civ == ''){
        $civ = $customer['civilite'];
    }
}

function displayInfo($data,$info,$customer){
    if($data != false && isset($data[$info]) && ($data[$info] != null || $data[$info] != '')){
        return $data[$info];
    }
    else if(isset($customer[$info])){
        return $customer[$info];
    }else{
        return '';
    }
}

ob_start();
if($customer['estSociete'] == '1'){
    require('Views/formPro.php');
}else{
    require('Views/formPart.php');
}
if(file_exists('Public/JSON/'.$_GET['client'])){
    unlink('Public/JSON/'.$_GET['client']);
}
?>
<?php
$content = ob_get_clean();
require('Views/template.php')
?>
