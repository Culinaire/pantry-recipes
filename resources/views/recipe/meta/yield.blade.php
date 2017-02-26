<div class="recipe-yield">

  Yield:

  @if( ! empty($yield['qty']) && ! empty($yield['uom']) )
    <span class="yield-qty">{{ $yield['qty'] }}</span> <span class="yield-uom">{{ $yield['uom'] }}</span>
  @else
    <span>________________________________</span>
  @endif

</div>

