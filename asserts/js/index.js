// Toggle Mobile Menu
const mobileMenu = document.getElementById('mobile-menu');
const navLinks = document.querySelector('.nav-links');
const searchBar = document.querySelector('.search-bar');

mobileMenu.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    searchBar.classList.toggle('active');
});