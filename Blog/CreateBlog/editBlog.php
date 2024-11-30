<?php
include "../../model/blogs.php";
include "../../config/db.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $blogId = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $story = $_POST['story'];

    updateBlog($conn, $blogId, $title, $description, $category, $story);
    usleep(100000);
    header("Location: ../blog.php?id=$blogId");
}
