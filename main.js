let hamburgerMenu = document.getElementById("hamburger-menu");
let overlayMenu = document.querySelector(".overlay-menu");
let closeMenu = document.querySelector(".close-menu");

hamburgerMenu.addEventListener("click", function() {
    overlayMenu.classList.toggle("open");
    hamburgerMenu.classList.toggle("close");
});

closeMenu.addEventListener("click", function() {
    overlayMenu.classList.remove("open");
    hamburgerMenu.classList.remove("close");
});




