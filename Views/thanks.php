<?php
session_start();
ob_start();
var_dump($_POST);
$stylesheets = ['main'];
?>

<?php
$content = ob_get_clean();
require('Views/template.php')
?>
