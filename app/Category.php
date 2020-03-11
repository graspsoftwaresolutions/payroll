<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category_master';
    protected $fillable = [
        'id', 'cat_name', 'status'
    ];
}
