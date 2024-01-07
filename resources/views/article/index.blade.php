<x-layout> 
    
    

<x-title
title='Tutti gli articoli'
>

</x-title>


<div class="container">
  <div class="row">
@foreach($articles as $article)

    <div class="col-12 col-md-4 my-3">
      <x-card

      :$article
      />
<!-- commento non funzionante -->

    </div>
@endforeach

</div>
</div>






</x-layout>   