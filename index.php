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
        <!-- more content still to come here ... -->
    </div>
    <!-- // Page content -->

    <?php require 'includes/show_articles.php' ?>

    <!-- footer -->
    <?php include 'includes/footer.php' ?>
    <!-- // footer -->