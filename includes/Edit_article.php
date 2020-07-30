<?php
require '../config.php';

$slug = $_GET['slug'];

if (isset($_REQUEST['login_btn'])) {
    $newContent = $_POST['textarea'];
    $newTitle = $_POST['titlearea'];


    $sql_edit = "UPDATE posts SET content='$newContent',title='$newTitle' WHERE slug='$slug'";

    if ($conn->query($sql_edit)) {
        echo 'done';
    }else {
        echo 'nie';
    }
    header("Location: ../single_post.php?post-title=" . $newTitle . "&post-slug=" . $slug );


} else if (isset($_REQUEST['delete_btn'])) {
    $sql_delete = "DELETE FROM posts WHERE slug='$slug'";

    if ($conn->query($sql_delete)) {
        echo 'done';
    }else {
        echo 'nie';
    }

    header("Location: ../index.php");

}

