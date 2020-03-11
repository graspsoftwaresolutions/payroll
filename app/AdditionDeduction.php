<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdditionDeduction extends Model
{
    protected $table = 'payroll_addition_deduction';
    protected $fillable = [
        'id', 'name', 'main_cat_name','cat_id','assigned_to','status'
    ];
}
