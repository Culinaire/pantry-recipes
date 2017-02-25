<?php

namespace App\Bistro\Ingredient;

use App\Bistro\Ingredient\Ingredient;

class IngredientFactory
{
  public static function create($ingredient = [])
  {
    $ing = new Ingredient($ingredient);
    return $ing;  
  }
}