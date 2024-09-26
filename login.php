<?php
session_start();

$valid_username = "admin"; // Ganti dengan username yang valid
$valid_password = "password"; // Ganti dengan password yang valid

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Username atau password salah!";
    }
}
?>
