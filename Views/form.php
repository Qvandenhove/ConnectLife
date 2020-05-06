<?php
$stylesheets = ['main'];
function displayInfo($info,$customer){
    if(isset($customer[$info])){
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

?>
<?php
$content = ob_get_clean();
require('Views/template.php')
?>
