<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $table = 'statistic';
    protected $hidden = ['created_at','updated_at'];

}
