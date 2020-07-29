<?php

    $content = null;
    if (!isset($_GET['post-slug'])) {
        return;
    }
    $slug = $_GET['post-slug'];
    $sql_getContent = "SELECT content FROM posts WHERE slug='$slug'";

    if (empty($conn)) return;

    $result = mysqli_query($conn, $sql_getContent);

    if (!$result) return;

    $content = $result->fetch_all(MYSQLI_ASSOC);
