<?php
session_start();
ob_start();
?>

<section class = "container">
    <form class = "col-12 align-items-center flex-column d-flex">
        <img src="Public/Images/connectLife.png" alt="logo connectLife" class = "col-8 m-0">
        <div class="form-group col-8">
            <label class = "col-5">Civilité *: </label>
            <div class="radio">
                <input checked="true" type="radio" id="civiliteFemme" name="civilite" value="Femme">
                <div class="checkBox"><i class="fas fa-check hidden"></i></div>
            </div>

            <label class = "m-0 p-0 col-2" for="civiliteFemme">Madame</label>
            <div class = "radio" style="left:70px">
                <input type="radio" id="civiliteHomme" name="civilite" value="Homme">
                <div class="checkBox"><i class="fas fa-check hidden"></i></div>
            </div>
            <label for="civiliteHomme" class = "m-0 p-0 col-2">Monsieur</label>

        </div>

        <div class="form-group col-8">
            <label for="nom" class = "col-5">Nom *: </label>
            <input type="text" name = "nom" id="nom" class = "col-7 form-control">
        </div>

        <div class="form-group col-8">
            <label for="prenom" class = "col-5">Prénom *: </label>
            <input type="text" name = "prenom" id="prenom" class = "col-7 form-control">
        </div>

        <div class="form-group col-8">
            <label for="nomSociete" class = "col-5">Nom de la société *: </label>
            <input type="text" name = "nomSociete" id="nomSociete" class = "col-7 form-control">
        </div>
        <div class="form-group col-8">
            <label for="posteOccupe" class = "col-5">Poste occupé *: </label>
            <input type="text" name = "posteOccupe" id="posteOccupe" class = "col-7 form-control">
        </div>

        <div class="form-group col-8">
            <label for="adresse1" class = "col-5">Adresse1 *: </label>
            <input type="text" name = "adresse1" id="adresse1" class = "col-7 form-control">
        </div>

        <div class="form-group col-8">
            <label for="adresse2" class = "col-5">Adresse2 *: </label>
            <input type="text" name = "adresse2" id="adresse2" class = "col-7 form-control">
        </div>

        <div class="form-group col-8">
            <label for="codePostal" class = "col-5">Code postal *: </label>
            <input type="text" name = "codePostal" id="codePostal" class = "col-3 form-control">
        </div>

        <div class="form-group col-8">
            <label for="ville" class = "col-5">Ville *: </label>
            <select class = "form-control" name="ville" id="ville">
                <option value="Arras">Arras</option>
                <option value="Lille">Lille</option>
                <option value="Autre Part"> Autre Part</option>
            </select>
        </div>

        <div class="form-group col-8">
            <label for="telSociete" class = "col-5">Téléphone Société * : </label>
            <input type="text" name = "telSociete" id="telSociete" class = "col-7 form-control">
        </div>

        <div class="form-group col-8">
            <label for="telDirect" class = "col-5">Téléphone Directe * : </label>
            <input type="text" name = "telDirect" id="telDirect" class = "col-7 form-control">
        </div>

        <div class="form-group col-8">
            <label for="email" class = "col-5">Téléphone Directe * : </label>
            <input type="email" name = "email" id="email" class = "col-7 form-control">
        </div>
    </form>
    <div class="col-12 d-flex justify-content-end infoEtoile">* : champ à saisie obligatoire</div>
</section>

<script src="Public/JS/radioBox.js"></script>

<?php
$content = ob_get_clean();

require('Views/template.php')

?>
