<?php
session_start();

if (!isset($_SESSION['username']) || empty($_POST['comment']) || !isset($_POST['parent_id'])) {
    // Handle error, e.g., redirect to login page or show an error message
    header("Location: ./Posts/post1.php");
    exit();
}

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "polibet_user_login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$username = $_SESSION['username'];
$comment = $_POST['comment'];
$parent_id = $_POST['parent_id'];
$post_id = 0; // Replace with the actual post ID

$sql = "INSERT INTO comments (username, comment, parent_id, post_id) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii", $username, $comment, $parent_id, $post_id);

if ($stmt->execute()) {
    header("Location: ./Posts/post1.php");
} else {
    echo "Error posting reply: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
