const menuSwitcher = document.querySelector('#toggleMenuMobile');

const desktopMenu = document.querySelector("navMenuDesktop");

menuSwitcher.addEventListener('click', () => {
    desktopMenu.classList.toggle('active');
});