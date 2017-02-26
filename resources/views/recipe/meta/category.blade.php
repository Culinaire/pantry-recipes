<div class="recipe-categories">
  Category:
    @foreach($categories as $cat)
      <span class="recipe-category">{{ $cat }}</span>
    @endforeach
</div>