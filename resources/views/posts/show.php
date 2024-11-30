<?php $blog = $blog ?>

<h1><?php echo htmlspecialchars($blog->title) ?></h1>
<h2>By <?php echo htmlspecialchars($blog->author) ?></h2>
<p><?php echo htmlspecialchars($blog->blog) ?></p>
<a href="<?php echo route("posts.index") ?>">Back to Blogs</a>
<br>
<a href="<?php echo route("home") ?>">Return Home</a>