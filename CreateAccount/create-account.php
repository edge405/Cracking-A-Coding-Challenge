<?php
include '../config/db.php';
include '../model/user.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") { // Corrected comparison operator
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Check if passwords match
    try {
        if ($password !== $confirm_password) { // Strict inequality operator
            echo "<script>alert('Password does not match');</script>";
        } else {
            // Function to register user
            registerUser($conn, $username, $email, $password);
            echo "<script>alert('Registered user: $username');</script>";
        }
    } catch (Exception $e) {
        echo "<script>alert('Error');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Cracking a Coding Challenge</title>
    <link rel="stylesheet" href="create-account.css">
</head>

<body>
    <main>
        <section class="hero">
            <h1>Create Your Account</h1>
            <p>Sign up to get started with insights and solutions to coding challenges</p>
        </section>


        <!-- Modern Create Account Form Section -->
        <section class="create-account-form">
            <form action="create-account.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Choose a username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Choose a password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                </div>
                <button type="submit" id="submit-btn" class="create-submit-btn">Create Account</button>
            </form>
            <p class="login-link">Already have an account? <a href="../Login/login.php">Login here</a>.</p>
        </section>
    </main>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Cracking a Coding Challenge. All Rights Reserved.</p>
        <p>Follow me on
            <a href="https://www.instagram.com/edge.js" target="_blank">Instagram</a> |
            <a href="https://www.linkedin.com/in/edjay404/" target="_blank">LinkedIn</a> |
            <a href="https://github.com/edge405" target="_blank">GitHub</a>
        </p>
    </footer>
    <script src="create-account.js"></script>
</body>

</html>