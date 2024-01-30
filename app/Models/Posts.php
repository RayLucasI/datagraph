<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $primary_key = 'id';
    protected $table = 'posts';
    protected $fillable = ["titulo","tema"];
}