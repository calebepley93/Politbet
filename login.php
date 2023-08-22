<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "polibet_user_login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT password FROM registeredusers WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row && password_verify($password, $row['password'])) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: ./Posts/post1.php"); // Redirect to a welcome page
} else {
    echo "Incorrect username or password";
}

$conn->close();
?>
?>
