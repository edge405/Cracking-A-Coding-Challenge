<?php
session_start();

// Check if the user is logged in (optional for additional security)
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header("Location: ../Login/login.php"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cracking a Coding Challenge</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <header>
        <nav>
            <a href="home.html"><img src="blog-logo.png" alt="logo"></a>
            <button class="login-btn">Logout</button>
        </nav>
    </header>

    <main>
        <!-- <a href="../Login/logout.php">login</a> -->
        <?php echo '<h1 id="greeting">Welcome ' . $_SESSION['email'] . '!</h1>'; ?>
        <section class="hero">

            <h1>Cracking a Coding Challenge</h1>
            <p>Dive into a World of Solutions</p>

        </section>

        <section class="solutions">
            <div class="card" id="hackerrank-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/65/HackerRank_logo.png" alt="Hackerrank solutions">
                <h3>Hackerrank solutions</h3>
            </div>

            <div class="card" id="bestpractices-card">
                <img src="best-practices.png" alt="Best Practices">
                <h3>Best Practices</h3>
            </div>
            <div class="card" id="leetcode-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/LeetCode_logo_black.png" alt="Leetcode solutions">
                <h3>Leetcode solutions</h3>
            </div>
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
    <script src="home.js"></script>
</body>

</html>