import './bootstrap';
console.log('Vite is working!');

import 'bootstrap';
import '@popperjs/core';
import 'animate.css';
import './myjquery.js';

import $ from 'jquery';
// window.$ = window.jQuery = $;

import 'https://code.jquery.com/jquery-3.7.1.slim.min.js';
import '@fortawesome/fontawesome-free/css/all.min.css';







document.querySelectorAll('.sub-menu > a').forEach(item => {
    item.addEventListener('click', function () {
        const subMenu = this.nextElementSibling;
        const parentMenu = this.parentElement;

        // Close all other submenus if any are open
        document.querySelectorAll('.sub-menu').forEach(menu => {
            if (menu !== subMenu && menu.classList.contains('active')) {
                menu.classList.remove('active');
                menu.classList.add('collapse');
            }
        });

        // Toggle the clicked submenu (open or close it)
        if (subMenu.classList.contains('collapse')) {
            subMenu.classList.remove('collapse');  // Open the clicked submenu
            parentMenu.classList.add('active');    // Mark the parent menu as active
        } else {
            subMenu.classList.add('collapse');     // Close the clicked submenu
            parentMenu.classList.remove('active'); // Remove the active class from parent
        }

        // Automatically close the submenu after 5 seconds (or any desired delay)
        setTimeout(() => {
            if (!subMenu.classList.contains('collapse')) {
                subMenu.classList.add('collapse');  // Close the submenu
                parentMenu.classList.remove('active');  // Remove the active class from parent
            }
        }, 5000);  // 5000 milliseconds = 5 seconds
    });
});
