<?php
session_start();
ob_start();

$stylesheets = ['main', 'accueil'];
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
                <p>Nous vous enverrons un <strong class="strong">bon d'achat</strong> via l'adresse email valide fournie.</p>
            </div>
            <div class="head">
                <button class= "col btn"><a href= index.php> Au revoir </a></button>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require('Views/template.php')
?>
