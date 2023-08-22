let loginModal; // Declare the variable outside of any functions or event listeners
let registerModal;

function openLoginModal() {
    loginModal.style.visibility = "visible";
    console.log("Open Login Modal"); 
    document.getElementById('modalBackdrop').style.visibility = 'visible';
}

function closeLoginModal2() {
    loginModal.style.visibility = "hidden";
    console.log("Close Login Modal");
    document.getElementById('modalBackdrop').style.visibility = 'hidden';
}

function switchModal() {
    registerModal.style.visibility = "visible";
    loginModal.style.visibility = "hidden";
    document.getElementById('modalBackdrop').style.visibility = 'visible';
}

function closeLoginModal3() {
    registerModal.style.visibility = "hidden";
    console.log("Close Register Modal");
    document.getElementById('modalBackdrop').style.visibility = 'hidden';
}

function switchRegistertoLogin() {
    registerModal.style.visibility = "hidden";
    loginModal.style.visibility = "visible";
}

document.addEventListener('DOMContentLoaded', function() {
    loginModal = document.getElementById('loginModal'); // Assign the value inside DOMContentLoaded
    registerModal = document.getElementById('registerModal');

    let hamburgerMenu = document.getElementById("hamburger-menu");
    let overlayMenu = document.querySelector(".overlay-menu");
    let closeMenu = document.querySelector(".close-menu");
    let commentLogin = document.querySelector('.comment-section-login');
    let closeButton = document.getElementById('closeLoginModal');
    let loginHeader = document.querySelector(".login-text");
    let registerSwitch = document.querySelector(".login-switch-modal-button");

    hamburgerMenu.addEventListener("click", function() {
        overlayMenu.classList.toggle("open");
        hamburgerMenu.classList.toggle("close");
    });

    closeMenu.addEventListener("click", function() {
        overlayMenu.classList.remove("open");
        hamburgerMenu.classList.remove("close");
    });

    commentLogin.addEventListener('click', openLoginModal);
    closeButton.addEventListener('click', closeLoginModal2);
    loginHeader.addEventListener('click', openLoginModal);

});

function scrollToComments() {
    let commentSection = document.getElementById('comments');
    commentSection.scrollIntoView({ behavior: 'smooth' });
}

