<?php require 'config.php' ?>
<?php require 'includes/head_section.php' ?>
<title> A BLOG APART </title>
</head>
<body>
<?php include 'includes/navbar.php'; ?>

<div class="content">
    <h2 class="content-title" style="margin-left: 20px"> <?php echo $_GET['post-title'] ?></h2>
    <hr>

    <?php require 'includes/getContent.php'; ?>

    <?php if (isset($_COOKIE['userName'])): ?>
        <form method="post" action="includes/Edit_article.php?slug=<?php echo $slug; ?>&post-title=<?php echo $_GET['post-title']; ?>">
            <textarea name="titlearea" id="" cols="100" rows="1" style="margin-left: 30px"><?php echo $_GET['post-title']; ?></textarea>
            <textarea name="textarea" id="" cols="200" rows="10" style="margin-left: 30px"><?php echo $content[0]['content'] ?></textarea>
            <button type="submit" class="btn" name="login_btn">Edit</button>
            <button type="submit" class="btn" name="delete_btn">Delete</button>
        </form>
        <!--<form action="includes/Delete_article.php?slug=<?php /*echo $slug; */?>">
            <button type="submit" class="btn" name="delete_btn">Delete</button>
        </form>-->
    <?php else: ?>
        <p style="margin-left: 30px"><?php echo $content[0]['content'] ?></p>
    <?php endif; ?>

</div>

<!-- footer -->
<?php include 'includes/footer.php' ?>
<!-- // footer -->