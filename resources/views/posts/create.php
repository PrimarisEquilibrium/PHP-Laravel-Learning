<?php
use Illuminate\Support\Facades\Route;
?>

<h1>Upload Blog</h1>
<form action="<?php echo route("posts.store") ?>" method="POST">
    <?php echo csrf_field(); ?>

    <label for="title">Enter blog title: </label>
    <input type="text" name="title" id="title" required>
    <br>

    <label for="author">Enter author name: </label>
    <input type="text" name="author" id="author" required>
    <br>

    <label for="blog">Enter blog:</label>
    <br>
    <textarea name="blog" id="blog" rows="10" cols="50" required></textarea>
    <br>

    <button type="submit">Submit</button>
</form>