<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'batch',
        'arr_date',
        'fab_date',
        'exp_date',
        'qt_stock',
        'qt_sold',
        'qt_returned',
    ];
}
