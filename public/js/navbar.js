
    document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.querySelector('.menu-button');
        const navMenu = document.querySelector('.nav-menu');

        // Toggle menu visibility when the button is clicked
        menuButton.addEventListener('click', function () {
            navMenu.classList.toggle('hidden');
        });
    });

