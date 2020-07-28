<?php require 'config.php' ?>
<?php require 'includes/login_registration.php' ?>
<?php require 'includes/head_section.php' ?>
<title> A BLOG APART </title>
</head>
<body>

<div class="container">
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>
    <!-- // Navbar -->

    <div style="width: 40%; margin: 20px auto;" class="loginDiv">
        <form method="post" action="login.php" >
            <h2>Login</h2>
            <input type="text" name="username" value="" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" class="btn" name="login_btn">Login</button>
            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </form>
    </div>
</div>