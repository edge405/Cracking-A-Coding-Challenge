<?php
session_start();
include "../model/blogs.php";
include "../config/db.php";
include "../model/user.php";
include "../model/comment.php";

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
</head>

<body>

    <?php
    echo $_GET['id'];
    if (isset($_GET['id'])) {
        $blog_id = intval($_GET['id']); // Sanitize input
        $result = fetchBlogsById($conn, $blog_id);

        if ($result && $result->num_rows === 1) {
            $row = $result->fetch_assoc();
            echo "<h3>" . htmlspecialchars($row['blog_title']) . "</h3>";
            echo "<p class='description'>" . htmlspecialchars($row['description']) . "</p>";
            echo "<p class='story'>" . htmlspecialchars($row['story']) . "</p>";
            echo "<p class='category'>" . htmlspecialchars($row['category']) . "</p>";
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
            <button type="submit" class="submit-button">Submit</button>
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