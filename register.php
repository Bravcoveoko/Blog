<?php require 'config.php' ?>
<?php require 'includes/registration.php' ?>
<?php require 'includes/head_section.php' ?>
<title> A BLOG APART </title>
</head>
<body>

<div class="container">
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>
    <!-- // Navbar -->

    <div style="width: 40%; margin: 20px auto;" class="loginDiv">
        <form method="post" action="register.php" >
            <h2>Registration</h2>
            <input type="text" name="username" value="" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password2" placeholder="Confirm password">
            <button type="submit" class="btn" name="register_btn" style="margin-top: 10px">Register</button>
            <p>
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </div>
</div>