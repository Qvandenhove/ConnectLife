<?php
session_start();
ob_start();

$stylesheets = ['main','accueil'];
?>
<div class="container connectlife">
    <div class="row">
        <div class="head">
            <img class="col-6" src="Public/Images/connectLife.png" alt=logo>
        </div>
        <div class="col-12 d-flex flex-column align-items-center">
            <div class= "head col titre1">
                <p>Toute l'équipe de ConnectLife vous remercie.</p>
            </div>
            <div class= "head col text">
                <p>Vous recevrez votre <strong class="strong">bon d'achat</strong> sur l'adresse email fournie.</p>
            </div>
            <div class="head">
                <div class= "col"><h1> Au revoir et bonne journée </h1></div>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require('Views/template.php')
?>
