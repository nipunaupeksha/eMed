/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')
    })
}

/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction() {
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader() {
    const header = document.getElementById('header')
    // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
    if (this.scrollY >= 80) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
function navLinkActive() {
    const sections = document.querySelectorAll('section[id]')
    sections.forEach(current => {
        const sectionId = current.getAttribute('id').split("-")[0]
        if(sectionId==='home'){
            (document.querySelectorAll('.nav__menu a'))[0].classList.add('active-link')
        }else{
        document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')}
    })
}

window.addEventListener('load', navLinkActive)

/*=============== SCROLL REVEAL ANIMATION ===============*/
/*TODO*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    // reset: true
})

sr.reveal(`.home__data`)
sr.reveal(`.home__img`, { delay: 500 })
sr.reveal(`.home__social`, { delay: 600 })
sr.reveal(`.about__img, .form__img`, { origin: 'left' })
sr.reveal(`.about__data, .form__content`, { origin: 'right' })
sr.reveal(`.content__table`, { origin: 'bottom' })
sr.reveal(`.footer`, { interval: 100 })

/*=============== FOCUS ===============*/
const inputs = document.querySelectorAll(".form__input")

function addFocus() {
    let parent = this.parentNode.parentNode
    parent.classList.add("focus")
}

function removeFocus() {
    let parent = this.parentNode.parentNode
    if (this.value == "") {
        parent.classList.remove("focus")
    }
}

inputs.forEach(input=>{
    input.addEventListener("focus", addFocus)
    input.addEventListener("blur", removeFocus)
})