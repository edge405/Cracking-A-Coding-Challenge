<?php
include "../model/blogs.php";
include "../config/db.php";

header('Content-Type: application/json'); // Ensure the response is JSON

if (isset($_GET['id'])) {
    $blog_id = intval($_GET['id']); // Sanitize input
    $result = fetchBlogs($conn, $blog_id);
    echo json_encode($result); // Output the JSON
} else {
    echo json_encode(["error" => "No blog ID provided"]);
}
