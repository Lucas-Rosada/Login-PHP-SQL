const forms = document.querySelector('.form-box');
const login = document.querySelector('.login');
const register = document.querySelector('.register');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

register.addEventListener('click', ()=> {
    forms.classList.add('active');
});

login.addEventListener('click', ()=> {
    forms.classList.remove('active');
});

btnPopup.addEventListener('click', ()=> {
    forms.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=> {
    forms.classList.remove('active-popup');
});