let request = new XMLHttpRequest();

const button = document.querySelector("button");

button.addEventListener('click',function(e){
    const response_div = document.querySelector('div.response');
    response_div.innerHTML = "Le fichier est en cours de génération merci de patienter.";
    request.open('GET','index.php?action=get_XML');
    request.onreadystatechange = function(){
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200){
            response = JSON.parse(this.responseText);
            console.log(response.path)
            if(response.path !== 'false'){
                const anchor = document.createElement('a');
                anchor.href = response.path;
                anchor.download = response.name;
                anchor.click();
                response_div.innerHTML = 'Le fichier à été généré, si le téléchargement n\'a pas été télécharger cliquez <a download="' + response.name + '" href="' + response.path + '">ici</a>'
            }else{
                response_div.innerHTML = 'Le fichier client n\'a pas besoin de mise à jour'
            }

        }
    };
    request.send()
});