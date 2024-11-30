<?php
session_start();
include "../model/blogs.php";
include "../config/db.php";
include "../model/user.php";
include "../model/comment.php";
include "../auth/auth.php";

authentication();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['userId'];
    $blogId = $_GET['id'];
    $comment = $_POST['comment'];

    insertComment($conn, $userId, $blogId, $comment);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="header.css">
</head>

<body>
    <header>
        <nav>
            <a href='../HomePage/home.php'><img src='../HomePage/blog-logo.png' alt='logo'></a>
            <a href='../Login/logout.php' id='logout' class='login-btn'>Logout</a>
        </nav>
    </header>
    <?php
    if (isset($_GET['id'])) {
        $blog_id = intval($_GET['id']); // Sanitize input
        $result = fetchBlogsById($conn, $blog_id);
        $res = retrieveLikeAndComment($conn, $blog_id);
        $totalLikeComment = $res->fetch_assoc();

        if ($result && $result->num_rows === 1) {
            $row = $result->fetch_assoc();
            echo "
    <div class='container'>
        <!-- Top Bar -->
        <div class='top-bar'>
            <div class='header'>
                <h1>" .  htmlspecialchars($row['blog_title']) . "</h1>
            </div>";
            if (isset($_SESSION['admin'])) {
                echo "
            <div class='action-buttons'>
                <a href='./CreateBlog/triggerEdit.php?id=$blog_id'>
                <button class='action-btn edit'>✏️Edit</button>
                </a>
                <a href='delete.php?id=$blog_id'>
                <button class='action-btn delete'>🗑️Delete</button>
                </a>
            </div>";
            }
            echo "
        </div>

        <!-- Icon Bar -->
        <div class='icon-bar'>
            <form action='like.php?id=$blog_id' method='post' class='icon-group'>
                <input type='hidden' name='action' value='like'>
                <button type='submit' class='icon like'>❤️</button>
                <span class='icon-text'>" . htmlspecialchars($totalLikeComment['total_likes']) . " </span>
            </form>

            <div class='icon-group'>
                <i class='icon'>💬</i>
                <span class='icon-text'>" . htmlspecialchars($totalLikeComment['total_comments']) . "</span>
            </div>
        </div>
        <p id='category'>Category: " . htmlspecialchars($row['category']) . "</p>
        <hr>
        <p>" . htmlspecialchars($row['description']) . "</p>
        <hr>
        <!-- Content -->
        <div class='content'>
            <p>" . $row['story'] . "</p>
        </div>

    </div>";
        }
    }
    ?>

    <form class="comment-form" action="#" method="POST">
        <div class="form-container">
            <input
                class="comment-box"
                type="text"
                name="comment"
                placeholder="Add a comment"
                required />
            <button type="submit" class="submit-button">Send</button>
        </div>
    </form>

    <div class="comment-section">
        <?php
        // Validate and sanitize input
        $blogId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        if (!$blogId) {
            echo "<p>Invalid blog ID.</p>";
            exit;
        }

        // Fetch comments
        $result = populateComment($conn, $blogId);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                <div class='comment'>
                    <div class='comment-header'>
                        <span class='username'>" . htmlspecialchars($row['username']) . "</span>
                        <span class='timestamp'>" . htmlspecialchars($row['date']) . "</span>
                    </div>
                    <p class='comment-text'>" . htmlspecialchars($row['comment']) . "</p>
                </div>";
            }
        } else {
            echo "<p class='no-comments'>No comments yet. Be the first to comment!</p>";
        }
        ?>

    </div>

</body>

</html>