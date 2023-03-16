const menu = document.querySelector('#menu')
const closeMenu = document.querySelector('#closeMenu')
const burgerButton = document.querySelector('#burgerButton')
const webNavbar = document.querySelector('#webNavbar')
const webSection = document.querySelector('#webSection')


const profileMenuSection = document.querySelector('#profileMenuSection')
tippy('#profileMenu', {
    content: profileMenuSection.innerHTML,
    placement: 'bottom',
    interactive: true,
    allowHTML: true,
    arrow: false,
    trigger: 'click',
    theme: 'light',
    hideOnClick: true
});

const leaveTypeSection = document.querySelector('#leaveTypeSection')
tippy('#leaveTypeBtn', {
    content: leaveTypeSection.innerHTML,
    placement: 'bottom',
    interactive: true,
    allowHTML: true,
    arrow: false,
    // trigger: 'hover',
    theme: 'light',
    hideOnClick: true
});

const notifPopup = document.querySelector('#notifPopup')
tippy('#bellNotif', {
    content: notifPopup.innerHTML,
    placement: 'bottom',
    interactive: true,
    allowHTML: true,
    arrow: false,
    trigger: 'click',
    theme: 'light',
    hideOnClick: true,
    popperOptions: {
    modifiers: {
    computeStyle: {
        gpuAcceleration: false
    }}
}

});


const pjsSection = document.querySelector('#pjsSection');

tippy('#pjsBtn', {
    content: pjsSection.innerHTML,
    placement: 'bottom',
    interactive: true,
    allowHTML: true,
    arrow: false,
    // trigger: 'hover',
    theme: 'light',
    hideOnClick: true
});

burgerButton.addEventListener('click', () => {
    menu.classList.remove('-translate-x-full')
    webNavbar.classList.add('blur-[1px]', 'pointer-events-none', 'brightness-75', 'select-none')
    webSection.classList.add('blur-[1px]', 'pointer-events-none', 'brightness-75', 'select-none')
})

closeMenu.addEventListener('click', () => {
    menu.classList.add('-translate-x-full')
    webNavbar.classList.remove('blur-[1px]', 'pointer-events-none', 'brightness-75', 'select-none')
    webSection.classList.remove('blur-[1px]', 'pointer-events-none', 'brightness-75', 'select-none')
})

document.querySelector('#datePick').addEventListener("keydown", function (event) {
    if (event.keyCode === 8 || event.key === "/") {
        event.preventDefault();
    }
});
document.querySelector('#datePick').addEventListener("paste", function (event) {
    event.preventDefault();
});
document.querySelector('#datePick').addEventListener("drop", function (event) {
    event.preventDefault();
});
document.querySelector('#datePick').addEventListener("keypress", function (event) {
    var keyCode = event.keyCode || event.which;
    if (keyCode >= 48 && keyCode <= 57) {
        event.preventDefault();
    }
});
document.querySelector('#datePick').addEventListener("cut", (event) => {
    event.preventDefault();
});
document.querySelector('#datePick').addEventListener("dragstart", (event) => {
    event.preventDefault();
});
document.querySelector('#datePick').addEventListener("input", (event) => {
    const value = event.target.value;
    const asciiOnly = /^[\x00-\x7F]*$/;

    if (!asciiOnly.test(value)) {
        event.target.value = value.replace(/[^\x00-\x7F]/g, "");
    }
});


$(document).ready(function () {
    $('#datePick').multiDatesPicker({
dateFormat: "yy-mm-dd"});
});