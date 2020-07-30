<!-- The first include should be config.php -->
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
        <h2 class="content-title">Recent Articles</h2>
        <hr>

        <?php require 'includes/show_articles.php' ?>

        <?php foreach ($all_posts as $post): ?>
            <div class="post" style="margin-left: 0px;">
                <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>&post-title=<?php echo $post['title']; ?>">
                    <div class="post_info">
                        <h3><?php echo $post['title'] ?></h3>
                    </div>
                </a>
            </div>
        <?php endforeach ?>

        <?php if (isset($_COOKIE['userName'])): ?>
            <div class="post" style="margin-left: 0px;">
                <a href="add_post.php?>">
                    <div class="post_info">
                        <h3>Add new Post</h3>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <!-- more content still to come here ... -->
    </div>
    <!-- // Page content -->

    <!-- footer -->
    <?php include 'includes/footer.php' ?>
    <!-- // footer -->