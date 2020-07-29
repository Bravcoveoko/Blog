<?php
    if (isset($_POST['register_btn'])) {
        echo 'SUAHSASHUAHSUHAUSHUAH';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        // Check password
        if (strcmp($password, $password2) != 0)  {
            echo 'passwod';
            return;
        }

        // Check duplicate users

        $sql = "SELECT * FROM users WHERE name='$username'";

        if (empty($conn)) {
            echo 'nieco';
            return;
        }

        $result = mysqli_query($conn, $sql);

        $row = mysqli_num_rows($result);

        // Duplicate username
        if ($row > 0) {
            echo 'duplicate user';
            return;
        }

        $sqlInsert = "INSERT INTO users ( name, password)
                VALUES ('".$_POST["username"]."','".$_POST["password"]."')";

        $res = mysqli_query($conn, $sqlInsert);

        if ($res) {
            echo 'done';
        }else {
            echo 'ee';
        }


    }