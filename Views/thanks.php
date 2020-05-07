<?php
session_start();
ob_start();

$stylesheets = ['main'];
?>

<?php
$content = ob_get_clean();
require('Views/template.php')
?>
