// script.js

// Toggle Mobile Menu
const mobileMenu = document.getElementById('mobile-menu');
const navLinks = document.querySelector('.nav-links');
const searchBar = document.querySelector('.search-bar');

mobileMenu.addEventListener('click', () => {
  navLinks.classList.toggle('active');
  searchBar.classList.toggle('active');
});

// Fluid Navbar on Scroll
let prevScrollPos = window.pageYOffset;
const navbar = document.querySelector('.navbar');

window.onscroll = function () {
  const currentScrollPos = window.pageYOffset;

  if (prevScrollPos > currentScrollPos) {
    // Scrolling up
    navbar.style.top = '0';
  } else {
    // Scrolling down
    navbar.style.top = `-${navbar.offsetHeight}px`;
  }

  prevScrollPos = currentScrollPos;
};