<?php

    $all_posts = null;
    // No cookies -> show all articles
    if (!isset($_COOKIE['userName'])) {
       $sql = "SELECT * FROM posts";
        if (empty($conn)) return;

        $result = mysqli_query($conn, $sql);

        if (!$result) return;

        $all_posts = $result->fetch_all(MYSQLI_ASSOC);

    } else {

        $username = $_COOKIE['userName'];
        $sql_getID = "SELECT id FROM users WHERE name='$username'";

        if (empty($conn)) return;

        $result = mysqli_query($conn, $sql_getID);

        if (!$result) return;

        $userID = mysqli_fetch_assoc($result);

        // Posts logic

        $currentID = $userID['id'];
        $sql_getPosts = "SELECT * FROM posts WHERE userid='$currentID'";

        $postsResult = mysqli_query($conn, $sql_getPosts);

        $num = mysqli_num_rows($postsResult);

        if (!$postsResult) {
            echo 'daco zle';
            return;
        }

        $all_posts = $postsResult->fetch_all(MYSQLI_ASSOC);
    }

