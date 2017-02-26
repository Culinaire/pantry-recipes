@extends('recipes.recipes')

@section('content')

  @foreach($recipes as $recipe)

    @include('recipe.recipe', ['recipe'=> $recipe])
  
  @endforeach

@endsection
