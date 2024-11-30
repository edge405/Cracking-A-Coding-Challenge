<?php
session_start();

$_SESSION['edit'] = true;
$blogId = $_GET['id'];

header("Location: blog-form.php?id=$blogId");
