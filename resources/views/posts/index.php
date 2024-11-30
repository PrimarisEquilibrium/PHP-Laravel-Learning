<h1>Blogs</h1>
<hr>
<?php
foreach ($blogs as &$blog) {?>
    <br>
    <h2>
        <a href="<?php echo route("posts.show", [$blog->id]) ?>">
            <?php echo htmlspecialchars($blog->title) ?>
        </a>
    </h2>
    <h3>By: <?php echo htmlspecialchars($blog->author) ?></h3>
    <br>
    <hr>
<?php }
?>