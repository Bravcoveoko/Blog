<?php require 'config.php' ?>
<?php require 'includes/head_section.php' ?>
<title> A BLOG APART </title>
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<div class="content">
    <h2 class="content-title" style="margin-left: 20px"> <?php echo $_GET['post-title'] ?></h2>
    <hr>

    <?php require 'includes/getContent.php'?>

    <form method="post" action="includes/Edit_article.php?slug=<?php echo $slug; ?>&post-title=<?php echo $_GET['post-title']; ?>">
        <textarea name="textarea" id="" cols="200" rows="10" style="margin-left: 30px"><?php echo $content[0]['content'] ?></textarea>
        <button type="submit" class="btn" name="login_btn">Edit</button>
    </form>
</div>