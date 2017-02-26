@if (!empty($quality))

<h3>Quality Identifiers</h3>

<ul class="quality">

  @foreach($quality as $step)

    <li>{{ $step }}</li>

  @endforeach
  
</ul>

@endif