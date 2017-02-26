<div class="ingredient">
  <span class="ing-qty">@include('ingredient.qty', ['qty' => $ing->qty])</span>
  <span class="ing-uom">{{ $ing->uom }}</span>
  <span class="ing-item">{{ $ing->item }}</span>
</div>