<?php
session_start();

if (isset($_SESSION['username']) && !empty($_POST['comment'])) {
    $username = $_SESSION['username'];
    $comment = $_POST['comment'];

    // Connect to the database
    $servername = "localhost";
    $dbusername = "root";
    $password = "";
    $dbname = "polibet_user_login";

    $conn = new mysqli($servername, $dbusername, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Validate the comment (you can add additional validations here if needed)
    // ...

    // Insert the comment into the database
    $sql = "INSERT INTO comments (username, comment) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $comment);

    if (!$stmt->execute()) {
        echo "Error posting comment: " . $stmt->error;
        exit;
    }

    // Redirect back to the original page
    header("Location: ./Posts/post1.php");
} else {
    // Handle error (you can add specific error handling here)
    echo "Please log in and enter a comment.";
}
?>
