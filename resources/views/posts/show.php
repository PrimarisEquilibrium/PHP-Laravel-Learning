<?php 
use Illuminate\Support\Facades\Route;

$id = Route::input("id");
?>

<h2>Blog #<?php echo $id ?></h2>