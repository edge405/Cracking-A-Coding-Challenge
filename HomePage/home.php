<?php
session_start();
include "../config/db.php";
include "../model/user.php";
include "../model/admin.php";
include "../model/blogs.php";
include "../auth/auth.php";
include "../services/dateConvert.php";

authentication();

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
                    <a href='../Blog/CreateBlog/blog-form.php' class='button-container'>
                        <span class='icon'>✏️</span>
                        <span class='text'>Write</span>
                    </a>
                <a href='../Login/logout.php' id='logout' class='login-btn'>Logout</a>
                </div>
                ";
            } else {
                echo "<a href='../Login/logout.php' id='logout' class='login-btn'>Logout</a>";
            }
            ?>
        </nav>
    </header>


    <main>
        <!-- <h1>mahirap</h1> -->
        <?php
        if (isset($_SESSION['admin'])) {
            echo "<h1 class='greetings'>Welcome Admin!</h1>";
        } else {
            echo "<h1 class='greetings'>Welcome " . fetchUsernameById($conn, $_SESSION['userId']) . "!</h1>";
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
                <?php
                $result = latestPost($conn);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { // Fetch associative array
                        echo "<div class='latest-card'>";
                        echo "<h3>" . htmlspecialchars($row['blog_title']) . "</h3>";
                        echo "<p class='latest_content'>" . htmlspecialchars($row['description']) . "</p>";
                        echo "<p class='latest_category'>Category: " . htmlspecialchars($row['category']) . "</p>";
                        echo "<a href='../Blog/blog.php?id=" . htmlspecialchars($row['blogId']) .  "'>Read More</a>";
                        echo "<br>";
                        echo "<p>" . htmlspecialchars(convertBlog($row['created_at'])) . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No blogs found.</p>";
                }
                ?>

            </div>
        </section>

        <h1 id="blogs">Blogs</h1>
        <!-- Blog Section -->
        <section class="blogs">
            <div class="blog-container" id="blog-container">
                <!-- Blog posts will be dynamically inserted here -->
                <?php
                $result = fetchBlogs($conn);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { // Fetch associative array
                        echo "<div class='blog-card'>";
                        echo "<h3>" . htmlspecialchars($row['blog_title']) . "</h3>";
                        echo "<p class='blog_content'>" . htmlspecialchars($row['description']) . "</p>";
                        echo "<p class='blog_category'>Category: " . htmlspecialchars($row['category']) . "</p>";
                        echo "<a href='../Blog/blog.php?id=" . htmlspecialchars($row['blogId']) .  "'>Read More</a>";
                        // echo "<a href=''>Read More</a>";
                        echo "<br>";
                        echo "<p>" . htmlspecialchars(convertBlog($row['created_at'])) . "</p>
                        ";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No blogs found.</p>";
                }
                ?>
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
    <!-- <script src="home.js"></script> -->
</body>

</html>