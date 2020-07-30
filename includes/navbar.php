<div class="navbar">
    <div class="logo_div">
        <a href="index.php"><h1>A <?php echo !empty($_COOKIE['userName']) ? strtoupper($_COOKIE['userName']) . "'S" : '' ?> BLOG APART</h1></a>
    </div>
    <div class="options">
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="login.php">Log in</a></li>
            <li><a href="register.php">Register</a></li>

            <?php if (isset($_COOKIE['userName'])): ?>
                <li><a href="logout.php">Log out</a></li>
            <?php endif;?>
        </ul>
    </div>

</div>