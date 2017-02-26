@if(!empty($procedures))

 <h3>Procedures</h3>
 
 <ol class="procedures">

   @foreach($procedures as $step)

     <li>{{ $step }}</li>

   @endforeach
   
 </ol>

@endif