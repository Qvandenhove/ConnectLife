//Récupération des villes

let request = new XMLHttpRequest();


function recupererVilles(){
    request.open('POST','index.php?action=getVilles');
    request.onreadystatechange = function(){
        if(this.readyState === XMLHttpRequest.DONE && this.status === 200){
            let response = JSON.parse(this.responseText);
            let select = document.querySelector('select');
            select.innerHTML = "<option>Choisissez une ville</option>"
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

document.querySelector('input[name=codePostal]').addEventListener('change',recupererVilles);

//Adaptation du formulaire
// let form = document.querySelector('form');
// let champs = document.querySelectorAll('.form-control');
//
// let CustomerRequest = new XMLHttpRequest();
// let customerGUID = document.location.href.split('=');
// let data = {GUID: customerGUID[customerGUID.length - 1]};
// CustomerRequest.open('POST','index.php?action=getCustomer');
// CustomerRequest.onreadystatechange = function(){
//     if(this.readyState === XMLHttpRequest.DONE && this.status === 200){
//         let response = JSON.parse(this.responseText);
//         if(response.estSociete === "0"){
//             let champsInutiles = [champs[3], champs[4]];
//             champsInutiles.forEach(function(champInutile){
//                 console.log(champInutile)
//             })
//         }
//     }
// };
// CustomerRequest.send(JSON.stringify(data));
//
//


//Vérification du formulaire envoyé


form.addEventListener('submit',function(event){
    let errors = false;
    let radioFalse = 0;
    event.preventDefault();
    champs.forEach(function(champ){
        if(champ.getAttribute('type') === 'radio'){
            if(champ.getAttribute('checked') === 'false'){
                radioFalse++
            }
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
        }else if(champ.getAttribute('type') === 'text' || champ.getAttribute('type') === 'email' || champ.getAttribute('name') === 'ville'){
            if(champ.value === ''){
                let champErreur = document.querySelector('.erreur.' + champ.getAttribute('name'));
                champErreur.classList.remove('hidden');
                champ.addEventListener('input',function supprimerErreur(){
                    champ.classList.remove('erreur');
                    champErreur.classList.add('hidden')
                });
                champ.classList.add('erreur')
            }
        }

    });

});