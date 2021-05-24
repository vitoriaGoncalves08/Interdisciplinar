let btnMobile = document.querySelector('.btn-mobile');
console.log(btnMobile);
function toggleMenu(){
    const nav = document.getElementById('nav');/*para todas as classe da nav, toggle adiciona caso não tenha e tira caso tenha*/
    nav.classList.toggle('active');
}
btnMobile.addEventListener('click', toggleMenu);