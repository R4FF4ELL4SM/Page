const mobileBtn = document.querySelector('.btn-mobile');
const navLinks = document.getElementById('nav-links');
const icon = document.querySelector('.btn-mobile i')

mobileBtn.addEventListener('click', () => {
    //toggle tira e coloca classe show/times
    navLinks.classList.toggle('show')
    icon.classList.toggle('fa-times');
    icon.classList.toggle('fa-bars');
})