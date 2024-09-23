<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "user_hub_login";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function redirectWithMessage($message, $type) {
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $type;
    header("Location: registration.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['mobile'])) {
        // Sign up form submission
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $mobile = $_POST['mobile'];

        // Validate passwords match
        if ($password !== $confirm_password) {
            redirectWithMessage('Passwords do not match. Please try again.', 'error');
        }

        // Check if the email or mobile already exists
        $checkEmailSql = "SELECT * FROM users WHERE email='$email' OR mobile='$mobile'";
        $result = $conn->query($checkEmailSql);

        if ($result->num_rows > 0) {
            // Email or mobile already exists
            redirectWithMessage('You are already registered. Please log in.', 'info');
        } else {
            // Insert new user
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (name, email, password, mobile) VALUES ('$name', '$email', '$hashedPassword', '$mobile')";

            if ($conn->query($sql) === TRUE) {
                redirectWithMessage('Registration successful! You can now log in.', 'success');
            } else {
                redirectWithMessage('Error: ' . $conn->error, 'error');
            }
        }
    } elseif (isset($_POST['login_email']) && isset($_POST['login_password'])) {
        // Sign in form submission
        $email = $_POST['login_email'];
        $password = $_POST['login_password'];

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                header("Location: index.php");
                exit();
            } else {
                redirectWithMessage('Invalid password. Please try again.', 'error');
            }
        } else {
            redirectWithMessage('No user found with this email. Please sign up.', 'info');
        }
    }
}

$conn->close();
?>
