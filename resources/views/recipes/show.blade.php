@extends('recipes.recipes')

@section('content')
  
  @include('recipe.recipe', ['recipe'=> $recipe])
  
@endsection
