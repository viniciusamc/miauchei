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
  if (scrollY > 114) {
    logo.classList.add('hide')
    logoHeader.classList.add('topDown')
    logoHeader.classList.remove('hide')
  } else {
    btnMenu.classList.add('leftRight')
    logo.classList.remove('hide')
    logoHeader.classList.add('hide')
  }
}

btnMenu.addEventListener('click', toggleMenu)
