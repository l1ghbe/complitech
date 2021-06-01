const mainBtn = document.getElementById('btn');
const arrow = document.querySelector('.icon-arrow');
const mainNav = document.querySelector('.main__nav');
const nav = document.querySelectorAll('.main__nav-link');
const menuBtn = document.querySelector('.menu__btn');
const menu = document.querySelector('.menu');


mainBtn.addEventListener('mouseover', () => {
    if (true) {
        arrow.style.display = 'none';
    } else {
    }

})
mainBtn.addEventListener('mouseout', () => {
    if (true) {
        arrow.style.display = 'inline';
    } else {
    }

})

menuBtn.addEventListener('click', () => {
    mainNav.classList.toggle('active');
    menuBtn.classList.toggle('active')

});

new WOW().init();
