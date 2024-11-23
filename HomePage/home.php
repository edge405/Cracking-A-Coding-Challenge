<?php
session_start();
include "../config/db.php";
include "../model/user.php";
include "../model/admin.php";

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
            <a href='home.php'><img src='blog-logo.png' alt='logo'></a>

            <?php
            if (isset($_SESSION['admin'])) {
                echo "
                <div class='header-container'>
                    <a href='../Blog/CreateBlog/blog-form.html' class='button-container'>
                        <span class='icon'>✏️</span>
                        <span class='text'>Write</span>
                    </a>
                <a href='#' id='logout' class='login-btn'>Logout</a>
                </div>
                ";
            } else {
                echo "<a href='#' id='logout' class='login-btn'>Logout</a>";
            }
            ?>
        </nav>
    </header>


    <main>
        <h1>mahirap</h1>
        <?php
        if (isset($_SESSION['admin'])) {
            echo "Hello " . fetchAdminUsernameByEmail($conn, $_SESSION['email']);
        } else {
            echo "Hello " . fetchUsernameByEmail($conn, $_SESSION['email']);
        }
        ?>
        <section class="hero">
            <h1>Cracking a Coding Challenge</h1>
            <p>Dive into a World of Solutions</p>
        </section>
        <h1 id="latest">Latest Post</h1>
        <section class="latest">
            <div class="latest-container" id="latest-container">
                <!-- Blog posts will be dynamically inserted here -->
            </div>
        </section>

        <h1 id="blogs">Blogs</h1>
        <!-- Blog Section -->
        <section class="blogs">
            <div class="blog-container" id="blog-container">
                <!-- Blog posts will be dynamically inserted here -->
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