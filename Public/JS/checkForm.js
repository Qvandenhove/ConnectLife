//Récupération des villes

let request = new XMLHttpRequest();

function recupererVilles(){
    request.open('POST','index.php?action=getVilles');
    request.onreadystatechange = function(){
        if(this.readyState === XMLHttpRequest.DONE && this.status === 200){
            let response = JSON.parse(this.responseText);
            let select = document.querySelector('select');
            select.innerHTML = "<option value=''>Choisissez une ville</option>"
            for(ville in response){
                let option = document.createElement('option');
                select.appendChild(option);
                option.setAttribute('value',response[ville]);

                option.innerText = response[ville]
            }
        }
    };

    let data = {codePostal: document.querySelector('input[name=codePostal]').value};
    request.send(JSON.stringify(data));
}
recupererVilles();
document.querySelector('input[name=codePostal]').addEventListener('change',recupererVilles);


//Vérification du formulaire envoyé
let form = document.querySelector('form');
let champs = document.querySelectorAll('.form-control');
let option = ['adresse2'];


function displayError(champ){
    var champNom = champ.getAttribute('name')
    let champErreur = document.querySelector('.erreur.' + champNom);
    champErreur.classList.remove('hidden');
    champ.addEventListener('input',function supprimerErreur(){
        champ.classList.remove('erreur');
        champErreur.classList.add('hidden')
        if(champNom === 'tel1'){
            var tel2 = document.querySelector('input[name=tel2]');
            tel2.classList.remove('erreur');
            document.querySelector('.erreur.tel2').classList.add('hidden');
        }else if(champNom === 'tel2'){
            var tel1 = document.querySelector('input[name=tel1]')
            tel1.classList.remove('erreur');
            document.querySelector('.erreur.tel1').classList.add('hidden');
        }
    });
    champ.classList.add('erreur')
}

function verifierChampTexte(champ){
    if(champ.value === ''){
        errors = true;
        displayError(champ)
    }
}

function verifierRadio(){
    radioFalse++;
    if (radioFalse === 2){
        errors = true;
        document.querySelector('.erreur.civilite').classList.remove('hidden');
        boxes.forEach(function(box){
            box.classList.add('erreur');
            box.addEventListener('click',function supprimerErreur(){
                boxes.forEach(function(box){
                    document.querySelector('.erreur.civilite').classList.add('hidden');
                    box.classList.remove('erreur')
                });
                box.removeEventListener('click',supprimerErreur)
            })
        })
    }
}
let radioFalse = 0;
let errors;
form.addEventListener('submit',function(event){
    errors = false;

    event.preventDefault();
    champs.forEach(function(champ){
        let nomChamp = champ.getAttribute('name');
        if(champ.getAttribute('type') === 'radio'){
            if(champ.getAttribute('checked') === 'false'){
                verifierRadio()
            }

        }else if(['tel1','tel2'].indexOf(nomChamp) !== -1){
            let tel1 = document.querySelector("input[name=tel1]").value;
            let tel2 =document.querySelector("input[name=tel2]").value;
            if(tel1 === '' && tel2 === ''){
                errors = true;
                displayError(champ)
            }

        }

        else if((['text','mail'].indexOf(champ.getAttribute('type')) !== -1 || nomChamp === 'ville') && option.indexOf(nomChamp) === -1 ){
            verifierChampTexte(champ)
        }

    });
    console.log(errors);
    if (errors === false){
        form.submit();
    }
});