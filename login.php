<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_budget";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $_SESSION['login_error'] = "All fields are required";
        header("Location: index.php#login");
        exit();
    }

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Prepare statement to prevent SQL injection
    $query = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['logged_in'] = true;

            // Redirect to dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['login_error'] = "Invalid username or password";
            header("Location: index.php#login");
            exit();
        }
    } else {
        $_SESSION['login_error'] = "Invalid username or password";
        header("Location: index.php#login");
        exit();
    }

    $stmt->close();
}
$conn->close();
?>