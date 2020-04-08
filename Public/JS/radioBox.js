let checks = document.querySelectorAll(".fa-check");
let boxes = document.querySelectorAll('.checkBox')
let radios = document.querySelectorAll('input[type=radio]');

function updateBox1(){
    if(checks[0].classList.contains('hidden')){
        radios[0].setAttribute('checked','true');
        checks[0].classList.remove('hidden');
        checks[1].classList.add('hidden');
    }
}

function updateBox2(){
    if(checks[1].classList.contains('hidden')){
        radios[1].setAttribute('checked','true');
        checks[0].classList.add('hidden');
        checks[1].classList.remove('hidden');
    }
}

boxes[0].addEventListener('click',updateBox1);
boxes[1].addEventListener('click',updateBox2);

