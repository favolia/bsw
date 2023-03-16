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

var xValues = ["Completed", "On Hold", "Rejected", "In Progres"];
var yValues = [60, 5, 15, 15];
var barColors = [
    "#6366f1",
    "#fde758",
    "#ff1f1f",
    "#3ee06e",
];

new Chart("myChart", {
    type: "doughnut",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        responsive: false
    }

});

setTimeout(() => {
    const totalEmployee = new countUp.CountUp('totalEmployee', 350, { enableScrollSpy: true });
    const present = new countUp.CountUp('present', 390, { enableScrollSpy: true });
    const late = new countUp.CountUp('late', 350, { enableScrollSpy: true });
    const annualLeave = new countUp.CountUp('annualLeave', 40, { enableScrollSpy: true });
    totalEmployee.start()
    present.start()
    late.start()
    annualLeave.start()
}, 800);
