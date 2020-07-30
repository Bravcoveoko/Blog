<?php

require '../config.php';

$newTitle = $_POST['titlearea'];
$newContent = $_POST['textarea'];

$newSlug = createSlug($newTitle);

$currentUserName = $_COOKIE['userName'];

$sql_getID = "SELECT id FROM users WHERE name='$currentUserName'";

if (empty($conn)) {
    echo 'daco';
    return;
}

$result = mysqli_query($conn, $sql_getID);

if (!$result) ;

$userID = mysqli_fetch_assoc($result);
$userID = $userID['id'];

$sql_addArticle = "INSERT INTO posts ( title, slug, content, userid)
                VALUES ('$newTitle', '$newSlug', '$newContent', '$userID')";

$res = mysqli_query($conn, $sql_addArticle);

if ($res) {
    echo 'done';
}else {
    echo 'ee';
}

header("Location: ../index.php");


function createSlug($title) {
    return str_replace(" ", "-", trim(strtolower($title)));
}
