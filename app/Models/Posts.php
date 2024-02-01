<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \LaravelArchivable\Archivable;

class Posts extends Model
{
    use HasFactory;
    use Archivable;
    
    protected $primary_key = 'id';
    protected $table = 'posts';
    protected $fillable = ["titulo","tema"];
}
