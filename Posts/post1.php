<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "polibet_user_login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['username'])) {
    // User is logged in
    // Show comment form or other logged-in features
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Trump is almost certain to not appear in the August RNC debates</title>
    <link rel="stylesheet" href="../styles.css">
    <script>
    var isLoggedIn = <?php echo isset($_SESSION['username']) ? 'true' : 'false'; ?>;
    </script>
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
    <form action="../register.php" method="post" id="registerModal">
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
    <form action="../login.php" method="post" id="loginModal" class="login-modal">
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
                <img src="../Imgs/logo.webp" alt="logo">
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
                <a href="../index.html">Home</a>
                <a href="blog.php">Blog</a>
                <a href="blog.php">Predictions</a>
                <a href="blog.php">Where to Bet</a>
                <a href="about.php">About</a>
                <a href="forum.php">Contact</a>
                <?php
                if (isset($_SESSION['username'])): // User is logged in
                ?>
                <a href="../account.php">Account</a>
                <?php
                endif;
                ?>
            </nav>
            <div class="header-social-icons-bottom">
                <a href="#" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </header>
    <div class="you-may-also-like-cont">
        <h4>You may also like</h4>
        <div class="picture-headline">
            <img src="../Imgs/mahomesmvp.webp" alt="article image">
            <h3>Will Mahomes repeat as MVP?</h3>
        </div>
        <div class="picture-headline">
            <img src="../Imgs/putin.webp" alt="article image">
            <h3>Will Putin remain President of Russia in 2023?</h3>
        </div>
        <div class="picture-headline">
            <img src="../Imgs/trumpmugshot.webp" alt="article image">
            <h3>What are the odds that Trump will go to jail by the end of the year?</h3>
        </div>
    </div>
    <section class="post-page-container">
        <h1 class="post-title">Why Trump is Almost Certain to Not Appear in the August RNC Debates</h1>
        <div class="author-container">
            <p>WeirdMonkey</p>
            <div class="author-circle"></div>
            <p>August 18, 2023</p>
            <div class="author-circle"></div>
            <div class="comment-icon-container">
                <svg class="AlternateArticle_commentsvg__c_HtX jss45" fill="none" height="12" viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><path d="M10.8 0H1.2C0.54 0 0 0.54 0 1.2V12L2.4 9.6H10.8C11.46 9.6 12 9.06 12 8.4V1.2C12 0.54 11.46 0 10.8 0ZM10.8 8.4H2.4L1.2 9.6V1.2H10.8V8.4Z" fill="#123084"></path></svg>
                <p class="comment-link" onclick="scrollToComments();">Comments</p>
            </div>
        </div>
    </section>
    <section class="post-article-container">
        <img src="../Imgs/debate.webp" alt="debate">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt facere omnis minima! Veritatis sint est repudiandae cupiditate ea facilis culpa tempora tempore voluptate exercitationem eligendi laudantium consequuntur quisquam, suscipit praesentium. Facere quas enim, obcaecati harum illo reprehenderit ducimus quasi modi voluptatibus. Distinctio voluptatum dolor, at commodi doloribus vel deleniti, earum recusandae reiciendis asperiores dolorem dignissimos. Nam accusamus perferendis facilis minima?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ab libero quidem alias iusto, iste reiciendis culpa ex recusandae totam reprehenderit debitis corrupti esse, quos laudantium similique aspernatur molestias voluptatem quis tenetur. Laudantium, id vel optio eveniet possimus accusamus quisquam.</p>
        <h2>Lorem ipsum dolor sit amet consectetur.</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit asperiores assumenda aliquam, deleniti vero architecto tempore ad autem ducimus officiis nulla odio ipsa, tempora necessitatibus alias dicta eum doloremque nam.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, velit voluptatem veritatis quo laborum quam, aut perferendis nobis reprehenderit eveniet accusantium rem dolorum totam fugit.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque labore error dolores voluptatum laboriosam harum est esse ducimus, sapiente fugit cumque non qui voluptate quas porro quidem minima dignissimos optio officiis blanditiis commodi. Labore, incidunt. Voluptates molestias dolore aperiam rem.</p>
    </section>
    <div class="second-author-container">
        <p>Article written by:</p>
        <div class="second-author-img-cont">
            <img src="../Imgs/monkey.png" alt="profilephoto">
            <div class="profile-name">WeirdMonkey</div>
        </div>
    </div>
    <div class="comment-container2" id="comments">
        <div class="line-container"></div>
        <div class="comment-number">0 comments</div>
        <div class="line-container"></div>
    </div>
    <?php
function renderComments($parent_id, $post_id, $conn, $level = 0) {
    $sql = $parent_id === NULL ?
        "SELECT id, username, comment FROM comments WHERE post_id = ? AND parent_id IS NULL" :
        "SELECT id, username, comment FROM comments WHERE post_id = ? AND parent_id = ?";
    $stmt = $conn->prepare($sql);
    if ($parent_id === NULL) {
        $stmt->bind_param("i", $post_id);
    } else {
        $stmt->bind_param("ii", $post_id, $parent_id);
    }
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $comment_id = $row['id'];
        echo '<div class="comment-container1 level-' . $level . '">'; // Add level class
            
                echo '<div class="comment">';
                    echo '<div class="comment-topline">';
                        echo '<div class="comment-avatar">';
                            echo '<img src="../Imgs/monkey.png" alt="profilephoto">';
                        echo '</div>';
                        echo '<div class="comment-author-date-container">';
                            echo '<p class="comment-author">' . htmlspecialchars($row['username']) . '</p>';
                            echo '<p class="comment-date">24 Aug, 2023</p>';
                            echo '<a href="javascript:void(0);" class="comment-reply" onclick="showReplyForm(' . $comment_id . ');">Reply</a>';
                        echo '</div>';
                     echo '</div>';
                     echo '<p class="comment-text">' . htmlspecialchars($row['comment']) . '</p>';
                     
                echo '</div>';
                echo '<hr class="comment-section-divider">';
                echo '<div class="reply-form" id="reply-form-' . $comment_id . '" style="display: none;">';
                    echo '<form action="../post_reply.php" method="post">';
                        echo '<textarea name="comment" placeholder="Write your reply here..." required id="commentReply2"></textarea>';
                        echo '<input type="hidden" name="parent_id" value="' . $comment_id . '">'; // Change to comment_id
                        echo '<input type="submit" value="Post Reply" id="replySubmit">';
                    echo '</form>';
                echo '</div>';
        echo '</div>'; // End of the comment div
        echo '<hr class="comment-section-divider" id="hr-reply-' . $comment_id . '" style="display: none;">';

        // Recursive call to render the replies to this comment
        renderComments($comment_id, $post_id, $conn, $level + 1);

    }
}

// Call the function to render top-level comments
$post_id = 0; // Replace with the actual post ID
renderComments(NULL, $post_id, $conn, 0);

if (isset($_SESSION['username'])):
?>
      <!-- Comment form for logged-in users -->
        <form action="../post_comment.php" method="post" id="commentForm">
            <textarea name="comment" id="comment" placeholder="Write your comment here..." required></textarea>
            <input type="submit" value="Post Comment" class="post-comment-button">
        </form>
<?php else: ?>
        <section class="comment-section">
            <a class="comment-section-login" onclick="openLoginModal();">Login to comment</a>
            <hr>
        </section>
<?php endif; ?>


    <footer>
        <p>Polibet <span>&copy; 2023</span></p>
    </footer>
    <script src="../main.js"></script>
    <script>
        function showReplyForm(commentId) {
    if (isLoggedIn) {  // Check if the user is logged in
        var replyForm = document.getElementById('reply-form-' + commentId);
        var hrReply = document.getElementById('hr-reply-' + commentId);
        
        if (replyForm.style.display === 'none' || replyForm.style.display === '') {
            replyForm.style.display = 'block';
            hrReply.style.display = 'block'; // Show the <hr>
        } else {
            replyForm.style.display = 'none';
            hrReply.style.display = 'none'; // Hide the <hr>
        }
    } else {
        openLoginModal();  // Open login modal if the user is not logged in
    }
}

    </script>
</body>
</html>