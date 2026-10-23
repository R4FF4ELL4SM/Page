const mobileBtn = document.querySelector('.btn-mobile');
const navLinks = document.getElementById('nav-links');
const icon = document.querySelector('.btn-mobile i')

mobileBtn.addEventListener('click', () => {
    //toggle tira e coloca classe show/times
    navLinks.classList.toggle('show')
    icon.classList.toggle('fa-times');
    icon.classList.toggle('fa-bars');
})

window.addEventListener('scroll', () => {
    const header = document.getElementById('header');

    if (window.scrollY > 0) {
        header.style.boxShadow = '0 4px 10px rgba(62, 23, 90, 0.52)';
    } else {
        header.style.boxShadow = 'none';
    }
})