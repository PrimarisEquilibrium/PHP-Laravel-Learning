<?php 
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;

$id = Route::input("id");
?>

<h2>Blog #<?php echo $id ?></h2>
<a href="<?php echo URL::route("posts.comments.show", [$id])?>">Comments</a>