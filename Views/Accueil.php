 <?php
 ob_start();
 $stylesheets=["main","accueil"]
 ?>

<div class="container connectlife">
    <div class="row">
        <div class="head">
            <img class="col-6" src="./Public/Images/connectLife.png" alt=logo>
        </div>
        <div class="col-12 d-flex flex-column align-items-center">
            <div class= "head col titre1"> 
                <p>Bienvenue sur ConnectLife</p>
            </div>
            <div class= "head col text">
                <p>Veuillez remplir le formulaire de renseignement afin d'obtenir votre <strong class="strong">bon d'achat</strong> !</p>
            </div>
            <div class="head">
                <button class= "col btn"><a href= #>Remplir</a></button>            
            </div>
        </div>
    </div>
</div>
<?php
$content=ob_get_clean();
require("Views/template.php");