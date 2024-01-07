<x-layout> 
    
    

<x-title
title='Dashboard Utente:{{Auth::user()->name}}'
>

</x-title>



<div class="container">
  <div class="row">
@foreach (Auth::user()->articles as $article)

    <div class="col-12 col-md-4 my-3">
      <x-card

      :$article
      />


    </div>
@endforeach

</div>
</div>




</x-layout>   