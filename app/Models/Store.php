<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table = 'stores';
    protected $fillable = [
        'name',
        'store_location',
        'postal_code',
        'country',
        'service',
        'currency',
        'website',
        'facebook',
        'insta',
        'youtube',
        'google',
        'linkedin',
    ];
}
