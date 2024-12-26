<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Add 'name' to the $fillable array
    protected $fillable = ['name'];
}
