<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Trump is almost certain to not appear in the August RNC debates</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="overlay-menu">
        <div class="overlay-menu-content">
            <a href="../index.html" class="overlay-list">Home</a>
            <a href="blog.php" class="overlay-list">Politics</a>
            <a href="blog.php" class="overlay-list">Sports</a>
            <a href="blog.php" class="overlay-list">Entertainment</a>
            <a href="blog.php" class="overlay-list">Where to Bet</a>
            <a href="about.php" class="overlay-list">About</a>
            <a href="forum.php" class="overlay-list">Forum</a>
        </div>
    </div>
    <form action="./register.php" method="post" id="registerModal">
        <button id="closeLoginModal" class="close-button1" type="button" onclick="closeLoginModal3();">&times;</button>
        <!-- gonna have to change some stuff on this to avoid conflict -->
        <h3>Sign Up</h3>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Register">
        <hr class="modal-divider">
        <div class="dont-have-account">
            <p>Already have an account?</p>
            <a href="#" class="login-switch-modal-button" onclick="switchRegistertoLogin();">Login</a>
        </div>
    </form>
    <div id="modalBackdrop"></div>
    <form action="./login.php" method="post" id="loginModal" class="login-modal">
        <button id="closeLoginModal" class="close-button1" type="button" onclick="closeLoginModal2();">&times;</button>
        <h3>Login</h3>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Login" class="login-modal-button">
        <hr class="modal-divider">
        <div class="dont-have-account">
            <p>Don't have an account?</p>
            <a href="#" class="register-modal-button" onclick="switchModal();">Sign Up</a>
        </div>
    </form>
    <!-- add parent div and change javascript to match -->
    <header class="big-header">
        <div class="header-top">
            <div class="empty-div">
                <img src="./Imgs/logo.webp" alt="logo">
                <p>POLI<span class="red">BET</span></p>
            </div>
            <div class="header-social-icons">
                <a href="#" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <a class="login-text" onclick="openLoginModal();">LOGIN</a>
        </div>
        <div class="header-bottom">
            <!-- a nav menu with home, blog, about, forum -->
            <nav class="nav-menu">
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <a href="./index.html">Home</a>
                <a href="blog.php">Blog</a>
                <a href="blog.php">Predictions</a>
                <a href="blog.php">Where to Bet</a>
                <a href="about.php">About</a>
                <a href="forum.php">Contact</a>
                <a href="./account.php">Account</a>
            </nav>
            <div class="header-social-icons-bottom">
                <a href="#" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </header>
    <a href="logout.php" class="logout-button">Logout</a>
    <footer>
        <p>Polibet <span>&copy; 2023</span></p>
    </footer>
</body>
</html>