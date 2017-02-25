<?php

namespace App\Services\Recipe;

use App\Bistro\Recipe\Recipe;

class RecipeFactory
{
  /**
   * @param  object App\Bistro\Recipe\Recipe
   * @return object
   */
  public static function create($recipe)
  {
    $recipe = new Recipe($recipe);
    $recipe->setType('batch');
    return $recipe;  
  }
}