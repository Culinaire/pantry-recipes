@if(!empty($meta))

  @if(array_key_exists('yield', $meta))
    @include('recipe.meta.yield', ['yield' => $meta['yield']])
  @endif

  @if(array_key_exists('prep_time', $meta))
    @include('recipe.meta.preptime', ['time' => $meta['prep_time']])
  @endif
  
  @if(array_key_exists('category', $meta))
    @include('recipe.meta.category', ['categories' => (array) $meta['category']])
  @endif
  
@endif