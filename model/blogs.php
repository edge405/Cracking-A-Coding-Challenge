<?php
include "../config/db.php";

function insertBlog($conn, $blog_title, $description, $category, $story)
{
    $sql = "INSERT INTO blogs (adminId, blog_title, description, story, category) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $adminId = 1;

        $stmt->bind_param("issss", $adminId, $blog_title, $description, $story, $category);

        if ($stmt->execute()) {
            echo "<script>alert('new blog created successfully');</script>";
            echo "<script>
            setTimeout(function() {
                window.location.href = 'blog-form.html';
            }, 100); // Redirect after 0.1 seconds
          </script>";
        } else {
            echo "Error: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
    }
}

function fetchBlogs($conn, $blog_id)
{
    // Prepare the SQL query
    $stmt = $conn->prepare("SELECT * FROM blogs WHERE blogId = ?");
    $stmt->bind_param("i", $blog_id); // Bind the integer parameter

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        // Fetch the blog details as an associative array
        $blog = $result->fetch_assoc();
        return json_encode($blog);
    } else {
        return json_encode(["error" => "Blog not found"]);
    }

    $stmt->close(); // Close the prepared statement
}
