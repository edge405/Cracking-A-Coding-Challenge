<?php
session_start();
include '../config/db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];


    try {
        if (verifyAccount($conn, $email, $password)) {
            $_SESSION['logged_in'] = true;
            $_SESSION['email'] = $email;
            // $_SESSION['admin'] = true;
            header("Location: ../HomePage/home.php");
            exit();
        } else {
            echo "<script>alert('Invalid Credentials');</script>";
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
    <title>Admin</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <header>
        <!-- <nav>
            <a href="../HomePage/home.html"><img src="blog-logo.png" alt="logo"></a>
            <button class="login-btn">Login</button>
        </nav> -->
    </header>

    <main>
        <section class="hero">
            <h1>Welcome Back</h1>
        </section>
        <!-- /Login/greeting.html -->
        <!-- Modern Login Form Section -->

        <section class="login-form">
            <form action="admin.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com" required>
                </div>
                <div class="form-group">
                    <label for="password"> Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" id="submit-btn" class="login-submit-btn">Sign In</button>
            </form>
            <p class="register-link">Are you a user? <a href="login.php">Login here</a></p>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Cracking a Coding Challenge. All Rights Reserved.</p>
        <p>Follow me on
            <a href="https://www.instagram.com/_csedge" target="_blank">Instagram</a> |
            <a href="https://www.linkedin.com/in/edjay404/" target="_blank">LinkedIn</a> |
            <a href="https://github.com/edge405" target="_blank">GitHub</a>
        </p>
    </footer>
    <script src="login.js"></script>
</body>

</html>