<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoes extends Model
{
    use HasFactory;

    protected $fillable=[
        's_image',
        's_name',
        's_price',
        's_quantity'
    ];

}
