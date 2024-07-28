

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

// $(document).ready(function(){
//     $('.menu-btn').click(function(){
//       $('#navbarSupportedContent').toggleClass('show');
//     });
//   });

document.addEventListener('DOMContentLoaded', function () {
    const caption = document.querySelector('.caption');
    const caption2 = document.querySelector('.caption2');
    const avatar = document.querySelector('.avatar');
  
    // Trigger animations
    setTimeout(() => {
        caption.classList.add('visible');
    }, 1000);

    setTimeout(() => {
      caption2.classList.add('visible');
    }, 2000);

    setTimeout(() => {
        avatar.classList.add('visible');
      }, 1000);
    
  });

  //step 1: get DOM
let nextDom = document.getElementById('next');
let prevDom = document.getElementById('prev');

let carouselDom = document.querySelector('.carousel');
let SliderDom = carouselDom.querySelector('.carousel .list');
let thumbnailBorderDom = document.querySelector('.carousel .thumbnail');
let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll('.item');
let timeDom = document.querySelector('.carousel .time');

thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
let timeRunning = 3000;
let timeAutoNext = 7000;

nextDom.onclick = function(){
    showSlider('next');    
}

prevDom.onclick = function(){
    showSlider('prev');    
}
let runTimeOut;
let runNextAuto = setTimeout(() => {
    next.click();
}, timeAutoNext)
function showSlider(type){
    let  SliderItemsDom = SliderDom.querySelectorAll('.carousel .list .item');
    let thumbnailItemsDom = document.querySelectorAll('.carousel .thumbnail .item');
    
    if(type === 'next'){
        SliderDom.appendChild(SliderItemsDom[0]);
        thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
        carouselDom.classList.add('next');
    }else{
        SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
        thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
        carouselDom.classList.add('prev');
    }
    clearTimeout(runTimeOut);
    runTimeOut = setTimeout(() => {
        carouselDom.classList.remove('next');
        carouselDom.classList.remove('prev');
    }, timeRunning);

    clearTimeout(runNextAuto);
    runNextAuto = setTimeout(() => {
        next.click();
    }, timeAutoNext)
}
  
