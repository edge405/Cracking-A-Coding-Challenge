<?php
include "../../model/blogs.php";
include "../../config/db.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $story = $_POST['story'];

    insertBlog($conn, $title, $description, $category, $story);
}
