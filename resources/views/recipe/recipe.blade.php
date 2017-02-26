<div id="{{ $recipe->id }}"class="recipe" data-section="">
  
  <div class="recipe-header">
    <h2 class="recipe-title">{{ $recipe->title }}</h2>
  </div>
  
  <div class="recipe-meta">
    @include('recipe.partials.meta', [ "meta" => $recipe->meta ])
  </div>
  
  <div class="recipe-ingredients">
    @include('recipe.partials.ingredients', [ "ingredients" => $recipe->ingredients ])
  </div>

  <div class="recipe-procedures">
    @include('recipe.partials.procedures', [ "procedures" => $recipe->procedures ])
  </div>

  <div class="recipe-quality">
    @include('recipe.partials.quality', [ "quality" => $recipe->quality ])
  </div>

  <div class="recipe-footer hidden">
    <span class="copyright">{{ config('app.name') }} &copy; {{ Carbon::now() }}</span>
  </div>
</div>