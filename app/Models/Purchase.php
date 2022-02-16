<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchases';
    protected $fillable = [
        'p_name',
        'p_size',
        'p_color',
        'p_price',
        'p_quantity',
        'p_code',
        'image',


    ];
}
