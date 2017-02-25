<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
  return redirect()->route('recipes.index');
});

Route::get('recipes/import', 'RecipesController@import')->name('recipes.import');
Route::get('recipes/directory', 'RecipesController@directory')->name('recipes.directory');
Route::resource('recipes', 'RecipesController');


Route::get('test', function () {
  $path = storage_path('app/devrecipes');
  $dir = new App\Services\File\Directory($path);

  $files = $dir->files();

  $recipes = [];

  foreach ($files as $file) {
    $recipe = new App\Services\File\Read($file);
    $data = $recipe->read();

    $write = new App\Services\File\Write($data['name'], $data);
    //$write->toJson();

    dump($write);

    $recipes[] = $data;
  }

  dump($recipes);

  $converted = new App\Services\File\Directory(storage_path('app/recipes'));
  dump($converted);
});
