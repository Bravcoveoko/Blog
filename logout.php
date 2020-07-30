<?php
    setcookie('userName', "", time() - 1);

    echo $_COOKIE['userName'];
    header("Location: index.php");