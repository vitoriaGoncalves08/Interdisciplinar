let btn = document.getElementById('btn-mobile');
let toggleMenu = function(){ 
    document.querySelector('#nav').
    classList.toggle('active');
}

btn.addEventListener('click', toggleMenu);