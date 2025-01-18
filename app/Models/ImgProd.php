<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgProd extends Model
{
    use HasFactory;

    protected $fillable = ['image_prod', 'blade_name'];
}
