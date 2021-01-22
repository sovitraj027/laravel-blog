<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{//gaurded vaneko opposite of fillable
    protected $guarded = [];
    use HasFactory;
}
