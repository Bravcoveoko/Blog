<?php

    session_start();

    $conn = new mysqli("localhost", "root", "", "site");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }






