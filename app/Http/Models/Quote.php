<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $table = 'quote';
    protected $hidden = ['created_at','updated_at'];
}
