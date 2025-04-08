// script.js

// Mobile Menu Toggle
const mobileMenu = document.getElementById('mobile-menu');
const navLinks = document.querySelector('.nav-links');
const requestDemo = document.querySelector('.request-demo');

mobileMenu.addEventListener('click', () => {
  navLinks.classList.toggle('active');
  requestDemo.classList.toggle('active');
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

document.addEventListener('DOMContentLoaded', () => {
    // Line Chart
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    const lineChart = new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'Performance',
                data: [65, 59, 80, 81, 56, 55, 40],
                borderColor: '#4e73df',
                fill: false,
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Bar Chart
    const barCtx = document.getElementById('barChart').getContext('2d');
    const barChart = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['HR', 'Marketing', 'Finance', 'IT'],
            datasets: [{
                label: 'Ratings',
                data: [85, 70, 90, 65],
                backgroundColor: ['#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b'],
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Pie Chart
    const pieCtx = document.getElementById('pieChart').getContext('2d');
    const pieChart = new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Completed', 'In Progress', 'Pending'],
            datasets: [{
                data: [70, 20, 10],
                backgroundColor: ['#4e73df', '#1cc88a', '#f6c23e'],
            }]
        },
        options: {
            responsive: true,
        }
    });

    // Doughnut Chart
    const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
    const doughnutChart = new Chart(doughnutCtx, {
        type: 'doughnut',
        data: {
            labels: ['HR', 'Marketing', 'Finance', 'IT'],
            datasets: [{
                data: [30, 25, 25, 20],
                backgroundColor: ['#4e73df', '#1cc88a', '#f6c23e', '#e74a3b'],
            }]
        },
        options: {
            responsive: true,
        }
    });
});

document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const faqItem = button.parentElement;
        faqItem.classList.toggle('active');
    });
});

