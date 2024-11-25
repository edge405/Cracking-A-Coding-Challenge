<?php
session_start();
include "../config/db.php";
include "../model/like.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $blogId = $_GET['id'];
        $userId = $_SESSION['userId'];
        insertLike($conn, $blogId, $userId);
        echo "Liked blog";
        // Redirect before returning
        header("Location: blog.php?id=$blogId");
        exit;  // Make sure to exit after the header redirection

    } catch (Exception $e) {
        echo "<script>alert('Already Liked');</script>";
        // You need to make sure to output this before the redirect
        echo "<script>window.location.href = 'blog.php?id=$blogId';</script>";
        exit; // Ensure script stops after redirect
    }
}
