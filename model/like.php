<?php
include "../config/db.php";

function insertLike($conn, $blogId, $userId)
{
    $sql = "INSERT INTO likes (blogId, userId) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ii", $blogId, $userId);

        if ($stmt->execute()) {
            echo "like inserted";
        } else {
            echo "error" . $conn->error;
        }
    } else {
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
    }
}
