<?php

namespace App\Services;

use Symfony\Component\Finder\Finder;
use App\Services\ReadRecipeFromFile;

class GetRecipesFromDirectory
{
  protected $directory;
  protected $recipes;

  public function __construct($directory)
  {
    $this->directory = $directory;
    $this->run();
  }

  public function run()
  {
    // Get Files as array
    $files = $this->init();

    // Process filepaths to Recipe objects
    $this->recipes = $this->loadRecipes($files);
  }

  public function init()
  {
    $finder = new Finder();
    $finder->files()->in($this->directory);
    $files = [];
    foreach ($finder as $file) {
      $files[] = $file->getRealPath();
    }
    return $files;
  }

  public function getRecipe($path)
  {
    $recipe = new ReadRecipeFromFile($path);
    //dump($path);
    $data['name'] = $recipe->name();
    return $recipe;
  }

  public function loadRecipes($files = [])
  {
    $recipes = [];

    foreach ($files as $file) {
      $recipes[] = $this->getRecipe($file); 
    }

    return $recipes;
  }

  public function recipes()
  {
    return $this->recipes;
  }

}