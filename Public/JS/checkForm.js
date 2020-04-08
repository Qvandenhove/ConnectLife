let form = document.querySelector('form');
let champs = document.querySelectorAll('.form-control');
champs[0].setAttribute('checked', 'false');
champs[1].setAttribute('checked','false');
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
        }else if(champ.getAttribute('type') === 'text' || champ.getAttribute('type') === 'email'){
            if(champ.value === ''){
                let champErreur = document.querySelector('.erreur.' + champ.getAttribute('name'));
                console.log(champErreur);
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