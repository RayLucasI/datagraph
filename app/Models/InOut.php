<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InOut extends Model
{
    protected $table = 'siaeinout';
    public    $timestamps = false;
    protected $primary_key = 'cveinout';
}
