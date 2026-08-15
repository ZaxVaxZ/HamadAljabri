const toggle = document.querySelector('.menu-toggle');
const menu = document.getElementById('mobile-menu');

toggle.addEventListener('click', () => {
    const isOpen = toggle.classList.toggle('active');

    menu.classList.toggle('active', isOpen);

    toggle.setAttribute('aria-expanded', isOpen);
});