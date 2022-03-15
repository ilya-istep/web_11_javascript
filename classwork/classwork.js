'use strict';

let navMenuBtn = document.querySelector('.nav-menu-btn'),
    mainWrapp = document.querySelector('.main-wrapper');

navMenuBtn.addEventListener('click', () => {
  mainWrapp.classList.toggle('active');
});