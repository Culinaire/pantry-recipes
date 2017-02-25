<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
      'name',
      'contents',
    ];

    protected $casts = [
      'contents' => 'array'
    ];
}
