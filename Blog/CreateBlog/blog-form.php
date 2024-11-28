<?php
session_start();
include "../../auth/auth.php";

authentication();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blog-form.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <a href='../../HomePage/home.php'><img src='blog-logo.png' alt='logo'></a>
            <div class='header-container'>
                <a href='#' class='button-container'>
                    <span class='icon'>✏️</span>
                    <span class='text'>Write</span>
                </a>
                <a href='../../Login/logout.php' id='logout' class='login-btn'>Logout</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="blog-form-section">
            <h1>Create a New Blog</h1>
            <form action="submit-blog.php" method="POST" class="blog-form">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter blog title" required>
                </div>

                <div class="form-group">
                    <label for="title">Description</label>
                    <input type="text" id="title" name="description" placeholder="Enter description" required>
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category" required>
                        <option value="" disabled selected>Select a category</option>
                        <option value="Coding">Coding</option>
                        <option value="Design">Design</option>
                        <option value="Productivity">Productivity</option>
                        <option value="Lifestyle">Lifestyle</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="story">Story</label>
                    <textarea id="story" name="story" rows="10" placeholder="Write your story..." required></textarea>
                </div>

                <button type="submit" class="submit-btn">Publish Blog</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Cracking a Coding Challenge. All Rights Reserved.</p>
        <p>Follow me on
            <a href="https://www.instagram.com/_csedge" target="_blank">Instagram</a> |
            <a href="https://www.linkedin.com/in/edjay404/" target="_blank">LinkedIn</a> |
            <a href="https://github.com/edge405" target="_blank">GitHub</a>
        </p>
    </footer>
</body>

</html>