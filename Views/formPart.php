<?php
ob_start();
$stylesheets = ['main']
?>

<section class = "container">
    <form action="index.php?action=update&client=<?= $_GET['client'] ?>" method="POST" class = "col-12 align-items-center flex-column d-flex">
        <img src="Public/Images/connectLife.png" alt="logo connectLife" class = "col-8 m-0">
        <div class="form-group col-8">
            <label class = "col-4">Civilité *: </label>
            <div class="radio">
                <input class = "form-control" checked="false" type="radio" id="civiliteFemme" name="civilite" value="Femme">
                <div class="checkBox"><i class="fas fa-check hidden"></i></div>
            </div>

            <label class = "m-0 p-0 col-2" for="civiliteFemme">Madame</label>
            <div class = "radio" style="left:70px">
                <input class = "form-control" checked="false"  type="radio" id="civiliteHomme" name="civilite" value="Homme">
                <div class="checkBox"><i class="fas fa-check hidden"></i></div>
            </div>
            <label for="civiliteHomme" class = "m-0 p-0 col-2">Monsieur</label>

        </div>
        <div class = "col-12 d-flex flex-inline hidden erreur civilite">
            <div class="col-4 mr-5"></div>
            <div class=col-8>Veuillez indiquer votre civilité</div>
        </div>

        <div class="form-group col-8">
            <label for="nom" class = "col-4">Nom *: </label>
            <input type="text" name = "nom" id="nom" class = "col-7 form-control">
        </div>
        <div class = "col-12 d-flex flex-inline hidden erreur nom">
            <div class="col-4 mr-5"></div>
            <div class="col-8">Veuillez indiquer un nom valide</div>
        </div>

        <div class="form-group col-8">
            <label for="prenom" class = "col-4">Prénom *: </label>
            <input type="text" name = "prenom" id="prenom" class = "col-7 form-control">
        </div>
        <div class = "col-12 d-flex flex-inline hidden erreur prenom">
            <div class="col-4 mr-5"></div>
            <div class="col-8">Veuillez indiquer un prenom valide</div>
        </div>

        <div class="form-group col-8">
            <label for="adresse1" class = "col-4">Adresse1 *: </label>
            <input type="text" name = "adresse1" id="adresse1" class = "col-7 form-control">
        </div>
        <div class = "col-12 d-flex flex-inline hidden erreur adresse1">
            <div class="col-4 mr-5"></div>
            <div class="col-8">Veuillez indiquer une adresse valide</div>
        </div>

        <div class="form-group col-8">
            <label for="adresse2" class = "col-4">Adresse2 : </label>
            <input type="text" name = "adresse2" id="adresse2" class = "col-7 form-control">
        </div>
        <div class = "col-12 d-flex flex-inline hidden erreur adresse2">
            <div class="col-4 mr-5"></div>
            <div class="col-8">Veuillez indiquer une adresse valide</div>
        </div>

        <div class="form-group col-8">
            <label for="codePostal" class = "col-4">Code postal *: </label>
            <input type="text" name = "codePostal" id="codePostal" class = "col-3 form-control">
        </div>
        <div class = "col-12 d-flex flex-inline hidden erreur codePostal">
            <div class="col-4 mr-5"></div>
            <div class = "col-7">Veuillez indiquer un code postal valide</div>
        </div>

        <div class="form-group col-8">
            <label for="ville" class = "col-4">Ville *: </label>
            <select class = "form-control col-7" name="ville" id="ville">
                <option value="">Choisissez une ville</option>
            </select>
        </div>
        <div class = "col-12 d-flex flex-inline hidden erreur ville">
            <div class="col-4 mr-5"></div>
            <div class="col-8">Veuillez indiquer une ville valide</div>
        </div>

        <div class = "col-12 d-flex flex-inline">
            <div class="col-2 ml-1"></div>
            <div class="col-8 mb-4">Remplissez au moins un numéro de téléphone*</div>
        </div>
        <div class="form-group col-8">
            <label for="tel1" class = "col-4">Téléphone fixe : </label>
            <input type="text" name = "tel1" id="tel1" class = "col-7 form-control">
        </div>
        <div class = "col-12 d-flex flex-inline hidden erreur tel2">
            <div class="col-4 mr-5"></div>
            <div class="col-8">Veuillez indiquer un numéro de téléphone valide valide</div>
        </div>

        <div class="form-group col-8">
            <label for="tel2" class = "col-4">Téléphone portable : </label>
            <input type="text" name = "tel2" id="tel2" class = "col-7 form-control">
        </div>
        <div class = "col-12 d-flex flex-inline hidden erreur tel1">
            <div class="col-4 mr-5"></div>
            <div class="col-8">Veuillez indiquer un numéro de téléphone valide valide</div>
        </div>

        <div class="form-group col-8">
            <label for="email" class = "col-4">Email * : </label>
            <input type="email" name = "email" id="email" class = "col-7 form-control">
        </div>
        <div class = "col-12 d-flex flex-inline hidden erreur email">
            <div class="col-4 mr-5"></div>
            <div class="col-8">Veuillez indiquer une adresse mail valide</div>
        </div>
        <div class="col-12 d-flex justify-content-end infoEtoile">* : champ à saisie obligatoire</div>
        <div class="col-12 d-flex justify-content-end">
            <input type="submit" class="btn btn-outline-light">
        </div>
    </form>


</section>

<script src="Public/JS/radioBox.js"></script>
<script src="Public/JS/checkForm.js"></script>

<?php
$content = ob_get_clean();

require('Views/template.php')

?>
