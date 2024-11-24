<?php
include "../model/blogs.php";
include "../config/db.php";
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
</body>

</html>