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
                <p>Une erreur est survenue !</p>
            </div>
            <div class= "head col text">
                <p>Nous sommes désolés <?= $data['prenom']. ' ' . $data['prenom'] ?> mais il semble qu'une erreur ce soit produite.</p>
                <p>L'adresse Mail renseingée ne correspond pas.</p> 
                <p>Vous pouvez <strong class="strong">retourner au formulaire</strong> et renseingner de nouveau votre adresse Mail</p>  
                <p>Ou, <strong class="strong">contactez notre service mass-mailing</strong> pour des informations complémentaires.</p> 
            </div>
            <div class="head">
                <a href= "index.php?client=<?= $_GET['client']?>&action=form"><button class= "col btn">Formulaire</button></a>
                <a href= #><button class= "col btn">Contact</button></a>
            </div>
        </div>
    </div>
</div>
<?php
$content=ob_get_clean();
require("Views/template.php");