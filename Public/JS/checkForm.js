let form = document.querySelector('form');
form.addEventListener('submit',function(e){
    e.preventDefault();
    let champs = document.querySelectorAll('.form-control');
    champs.forEach(function(champ){
        console.log(champ.value);
    })
});