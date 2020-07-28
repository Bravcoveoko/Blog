<?php

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
    echo $num . ' sdsd';

    if (!$postsResult) {
        echo 'daco zle';
        return;
    }

    $all_posts = mysqli_fetch_all($postsResult);

    foreach ($all_posts as $post) {
        print_r($post[3]);
    }

    // TODO: doplnit article ...v post mas vsetky posty



