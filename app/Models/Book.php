<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Book extends Model
{
    protected $fillable = ['title','description','author'];
}
