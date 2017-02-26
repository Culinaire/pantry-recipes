@if (!empty($ingredients))
  
  <h3>Ingredients</h3>

  <ul class="ingredients">

    @foreach($ingredients as $ing)
    
    <li>
      @include('ingredient.ing', ['ing' => $ing])
    </li>
    
    @endforeach

  </ul>

@endif