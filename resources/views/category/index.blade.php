<x-layout> 
    
    

<x-title
title='Tutte le categorie'
>

</x-title>

@if(count($categories))
<div class="container">
  <div class="row">
@foreach($categories as $category)

    <div class="col-12 col-md-4 my-3">
      <x-card-category

      :$category
      />


    </div>
@endforeach

</div>
</div>
@else
<div class="container ">
  <div class="row">
    <h2 class="align-items-center text-danger">Non ci sono categorie disponibili.</h2>

</div>
</div>
@endif







</x-layout>  