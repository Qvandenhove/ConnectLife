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
                <p>Ce lien est mort !</p>
            </div>
            <div class= "head col text">
                <p>Nous sommes désolés mais il semble qu'une erreur ce soit produite.</p>
                <p>Ce lien n’existe pas. Veuillez <strong class="strong">contacter</strong> notre service mass-mailing pour obtenir des informations complémentaires.</p>
            </div>
            <div class="head">
                <button class= "col btn"><a href= #>Contact</a></button>            
            </div>
        </div>
    </div>
</div>
<?php
$content=ob_get_clean();
require("Views/template.php");