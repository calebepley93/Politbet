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

function scrollToComments() {
    let commentSection = document.getElementById('comments');
    commentSection.scrollIntoView({ behavior: 'smooth' });
}

function openLoginModal() {
        loginModal.style.visibility = "visible";
    }


document.addEventListener('DOMContentLoaded', function() {
    let commentLogin = document.querySelector('.comment-section-login');
    let loginModal = document.getElementById('loginModal');
    


    commentLogin.addEventListener('click', openLoginModal);

    document.getElementById('closeLoginModal').addEventListener('click', function() {
        loginModal.style.visibility = "hidden";
    });

    // Rest of your code...
});





