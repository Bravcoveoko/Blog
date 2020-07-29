<?php
require '../config.php';

$newContent = $_POST['textarea'];
$slug = $_GET['slug'];
$sql_edit = "UPDATE posts SET content='$newContent' WHERE slug='$slug'";

if ($conn->query($sql_edit)) {
    echo 'done';
}else {
    echo 'nie';
}
header("Location: ../single_post.php?post-title=" . $_GET['post-title'] . "&post-slug=" . $slug );