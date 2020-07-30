<?php require 'config.php' ?>
<?php require 'includes/head_section.php' ?>
<title> A BLOG APART </title>
</head>
<body>
<!-- container - wraps whole page -->
<div class="container">
    <!-- navbar -->
    <?php include 'includes/navbar.php'; ?>
    <!-- // navbar -->

    <!-- Page content -->
    <div class="content">
        <hr>

        <?php if (isset($_COOKIE['userName'])): ?>
            <form method="post" action="includes/addPost.php">
                <h1 style="margin-left: 30px">Title</h1>
                <textarea name="titlearea" id="" cols="100" rows="1" style="margin-left: 30px"></textarea>
                <h2 style="margin-left: 30px">Content</h2>
                <textarea name="textarea" id="" cols="200" rows="10" style="margin-left: 30px"></textarea>
                <button type="submit" class="btn" name="upload_btn">Upload post</button>
            </form>
        <?php endif; ?>

        <!-- more content still to come here ... -->
    </div>
    <!-- // Page content -->

    <!-- footer -->
    <?php include 'includes/footer.php' ?>
    <!-- // footer -->