

document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll("nav a");

    navLinks.forEach(link => {
        link.addEventListener("click", smoothScroll);
    });

    function smoothScroll(e) {
        e.preventDefault();
        const targetId = this.getAttribute("href").substring(1);
        const targetElement = document.getElementById(targetId);

        window.scrollTo({
            top: targetElement.offsetTop - document.querySelector("header").offsetHeight,
            behavior: "smooth"
        });
    }
});




// select dom items
const menuBtn = 
    document.querySelector(".menu-btn");

const menu = 
    document.querySelector(".navbar");

const menuNav = 
    document.querySelector(".navbar-collapse");

const navItems = 
    document.querySelectorAll(".nav-item");

const footerItems = 
    document.querySelectorAll(".footer-col2"); // Note: Renamed to footerItems for clarity

// Set the initial state of the menu
let showMenu = false;

menuBtn.addEventListener("click", toggleMenu);

function toggleMenu() {
    if (!showMenu) {
        menuBtn.classList.add("close");
        menu.classList.add("show");
        menuNav.classList.add("show");
        footerItems.forEach((item) =>
            item.classList.add("show")); // Iterate over each footerItem

        navItems.forEach((item) =>
            item.classList.add("show"));

        // Reset the menu state
        showMenu = true;
    } else {
        menuBtn.classList.remove("close");
        menu.classList.remove("show");
        menuNav.classList.remove("show");
        footerItems.forEach((item) =>
            item.classList.remove("show")); // Iterate over each footerItem

        navItems.forEach((item) =>
            item.classList.remove("show"));

        // Reset the menu state
        showMenu = false;
    }
}
