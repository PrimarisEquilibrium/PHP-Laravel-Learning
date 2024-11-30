<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ["title", "author", "blog"];

    protected $table = "blogs";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = true;
}
