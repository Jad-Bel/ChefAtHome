const burger = document.querySelector('#burger-menu');
const Header = document.querySelector('#menu');
const mobileMenu = document.querySelector('#mobile-menu');
const closeBtn = document.querySelector('.close-header-btn');

closeBtn.addEventListener('click', function () {
    Header.classList.remove('hidden');
    mobileMenu.classList.add('hidden');
});

burger.addEventListener('click', function () {
    Header.classList.add('hidden');
    mobileMenu.classList.remove('hidden');
});


