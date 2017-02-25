<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Services\GetRecipesFromDirectory;
use App\Recipe;
use App\Services\Recipe\RecipeFactory as Bistro;
class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();

        $recipes->transform(function($item, $key) {
            $recipe = Bistro::create($item);
            return $recipe;
        });

        $recipes->all();

        return view('recipes.index')->with('recipes', $recipes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->input();
        dump($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);
        $bistro = Bistro::create($recipe);
        //dump($bistro);
        return view('recipes.show')->with('recipe', $bistro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function import()
    {
        $files = new GetRecipesFromDirectory(storage_path('app/recipes'));
        //dump();
        $recipes = $files->recipes();
        foreach( $recipes as $recipe ) {
            
            $data = [
                "name" => $recipe->name(),
                "contents" => $recipe->contents(),
            ];
            dump($data);

            Recipe::create($data);
            
        }
        //dump($recipes);
        return redirect()->route('recipes.index');
    }

    public function directory()
    {
        $files = new GetRecipesFromDirectory(storage_path('app/recipes'));
        dump($files);
        //$filesFromDirectory = $files;
        //return view('recipes.index')->with('recipes', $filesFromDirectory);
    }
}
