<?php

namespace App\Bistro\Recipe;

use App\Bistro\Support\Model as BistroModel;
use App\Bistro\Ingredient\IngredientFactory as Ingredient;

use App\Recipe as Eloquent;

class Recipe extends BistroModel
{
  protected $attributes = [];

  public function __construct(Eloquent $model)
  {
    $this->id = $model->name;
    $this->title = $model->contents['name'];
    $this->meta = $model->contents['meta'];
    $this->setIngredients($model->contents['ingredients']);
    $this->quality = $model->contents['quality'];
    $this->procedures = $model->contents['procedures'];
  }

  public function setIngredients($ingredients = [])
  {
    $ings = [];
    
    foreach($ingredients as $ing) {
      $ingarray = (array) $ing;
      $ings[] = Ingredient::create($ingarray);
    }

    $this->ingredients = $ings;
  }

  public function setType($type = "")
  {
    $this->attributes['meta']['type'] = $type;
  }
}