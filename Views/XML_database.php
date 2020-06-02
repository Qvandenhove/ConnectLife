<?php
session_start();
ob_start();
$stylesheets = ['main','Accueil'];
?>
<div class="container connectlife">
    <div class="row">
        <div class="head">
            <img class="col-6" src="./Public/Images/connectLife.png" alt=logo>
        </div>
        <div class="col-12 d-flex flex-column align-items-center">
            <div class= "head col titre1">
                <p>Récupérer les derniers clients</p>
            </div>
            <div class= "head col text">
                <p>Ici vous pouver récupérer un fichier XML avec tout les clients ayant remplit le formuaire depuis la dernière fois que vous avez demandé ce fichier.</p>
            </div>
            <div class="head">
                <button class= "col btn">Générer</button>
                <div class="col response"></div>
            </div>
        </div>
    </div>
</div>
<script src="Public/JS/recupererXML.js"></script>
<?php
$content = ob_get_clean();
require('Views/template.php')
?>
