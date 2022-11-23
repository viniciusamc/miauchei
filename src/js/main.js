const fecharPopup = document.querySelector('.close-window');
const logoHeader = document.querySelector('.logoHeader')
const anunciar = document.querySelector('.anunciar');
const popup = document.querySelector('.pop-dialog')
const btnMenu = document.querySelector('.menuBar')
const liMobile = document.querySelectorAll('li')
const header = document.querySelector('header')
const logo = document.querySelector('.logo')
const body = document.querySelector('body')
const nav = document.querySelector('nav')


function toggleMenu() {
  header.classList.toggle('activeMenu')
  nav.classList.toggle('hide')
  body.classList.toggle('overflow')
}

function togglePopUp(){
  popup.showModal();
}

function closeWindow(){
  popup.close();
}

function onScroll() {
  console.log(scrollY);
  if (scrollY > 115) {
    logo.classList.remove('hide')
    logoHeader.classList.remove('hide')
  } else {
    btnMenu.classList.add('leftRight')
    logo.classList.remove('hide')
    logoHeader.classList.add('hide')
  }
};


btnMenu.addEventListener('click', toggleMenu);
anunciar.addEventListener('click', togglePopUp);
fecharPopup.addEventListener('click',closeWindow);
