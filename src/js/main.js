const logoHeader = document.querySelector('.logoHeader')
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

function onScroll() {
  console.log(scrollY);
  if (scrollY > 320) {
    logo.classList.remove('hide')
    logoHeader.classList.remove('hide')
  } else {
    btnMenu.classList.add('leftRight')
    logo.classList.remove('hide')
    logoHeader.classList.add('hide')
  }
}

btnMenu.addEventListener('click', toggleMenu)
