/*
 * Copyright (c) 2025 Kevin Strobel
 * SPDX-License-Identifier: MIT
 *
 * This file is licensed under the MIT License.
 * See the LICENSE.txt file in the project root for full license text.
 */

let mobileMenu = null;
let modalDialog = null;
let modalDialogClasses = null;
let modalDialogInner = null;
let modalDialogInnerClasses = null;
let progressBar = null;
let sections = null;
let navLinks = null;
let currentSection = null;

const NAV_LINK_ACTIVE_CLASS = 'my-navlink-active';

// animations
const EL_MIN_VISIBLE_DURATION_MS = 200;
const ANIMATION_SELECTOR = '.enterAnimation';
const PLAY_ANIMATION_CLASS = 'playAnim';
let observedElements = new Map();


document.addEventListener('DOMContentLoaded', function() {
    initGlobalVars();

    // mobile view: menu
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenuA = document.querySelectorAll('#mobile-menu .my-navlink');
    const homeLink = document.getElementById('homeLink');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('expanded');
    });
    mobileMenuA.forEach(menuLink => {
        menuLink.addEventListener('click', () => {
            closeMobileMenu();
        });
    });
    homeLink.addEventListener('click', () => {
        closeMobileMenu();
    });

    // global dialog
    modalDialog.addEventListener('click', (event) => {
        if (event.target === modalDialog) {
            closeDialog();
        }
    });

    // close menus / dialogs on ESC key press
    document.addEventListener('keydown', function(evt) {
        if (evt.key === 'Escape') {
            closeMobileMenu();
            closeDialog();
        }
    });

    // navbar + progressbar update
    window.addEventListener('scroll', () => {
        updateProgressBar();
        updateNavbar();
    });
    window.addEventListener('resize', () => {
        updateProgressBar();
    });

    // initial update
    updateProgressBar();
    updateNavbar();
});

function initGlobalVars() {
    mobileMenu = document.getElementById('mobile-menu');
    modalDialog = document.getElementById('modalDialog');
    modalDialogClasses = modalDialog.classList;
    modalDialogInner = document.getElementById('modalDialogInner');
    modalDialogInnerClasses = modalDialogInner.classList;
    progressBar = document.getElementById('progressBar');
    sections = document.querySelectorAll('section');
    navLinks = document.querySelectorAll('.my-navlink');
    currentSection = document.getElementById('currentSection');
}

function showDialog(title, subtitle, textTemplateEl) {
    document.getElementById('modalDialogTitle').innerHTML = title;

    const subtitleEl = document.getElementById('modalDialogSubtitle');
    subtitleEl.innerHTML = subtitle;
    if (subtitle === '')
        subtitleEl.classList.add('none');
    else
        subtitleEl.classList.remove('none');

    document.getElementById('modalDialogText').innerHTML = textTemplateEl.innerHTML;
    modalDialogInner.scrollTo(0, 0);

    modalDialogClasses.remove('pointer-events-none');
    modalDialogClasses.remove('opacity-0');
    modalDialogInnerClasses.remove('scale-0');
    document.body.style.overflow = 'hidden';
}

function closeMobileMenu() {
    mobileMenu.classList.remove('expanded');
}

function closeDialog() {
    modalDialogClasses.remove('pointer-events-none');
    modalDialogClasses.add('pointer-events-none');
    modalDialogClasses.add('opacity-0');
    modalDialogInnerClasses.add('scale-0');
    document.body.style.overflow = '';
}

function updateProgressBar() {
    // height of visible + invisible content
    documentHeight = document.documentElement.scrollHeight;
    windowHeight = window.innerHeight;
    maxScroll = documentHeight - windowHeight;
    scrollPercent = (window.scrollY / maxScroll) * 100;

    progressBar.style.width = scrollPercent + '%';
}

function updateNavbar() {
    const pageHalfHeight = window.innerHeight / 2;
    let currSectionId = '';

    // Determine visible section
    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        // If section is already visible to at least 50% && section is still in the viewport
        if (pageYOffset >= sectionTop - pageHalfHeight && pageYOffset < sectionTop + sectionHeight) {
            currSectionId = section.id;
        }
    });

    // Update navbars' styles
    navLinks.forEach(navLink => {
        currentSection.innerHTML = '&nbsp;';
        navLink.classList.remove(NAV_LINK_ACTIVE_CLASS);

        if (currSectionId.length !== 0) {
            // Two navlinks (normal + mobile menu) are returned
            const activeNavLinks = document.querySelectorAll(`.my-navlink[href="#${currSectionId}"]`);
            activeNavLinks.forEach(activeNavLink => {
                activeNavLink.classList.add(NAV_LINK_ACTIVE_CLASS);
            });

            if(activeNavLinks.length > 0)
                currentSection.textContent = activeNavLinks[0].textContent;
        }
    });
}
