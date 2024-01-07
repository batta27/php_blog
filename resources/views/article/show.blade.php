<x-layout> 
    
    

<x-title
title='Dettaglio articolo'
>

</x-title>


<div class="container">
  <div class="row">


    <div class="col-12 col-md-4 my-3">
    <div class="card" style="width: 18rem;">
    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h4 class="card-title">Titolo articolo : {{$article->title}}</h4>
    <h6 class="card-text">Autore : {{$article->author}}</h6>
    <p class="card-text">Testo : {{$article->body}}</p>
    <a href="{{route('homepage',['id'=>$article['id']])}}" class="btn btn-primary">Torna in homepage</a>

  </div>
</div>

    </div>


</div>
</div>






</x-layout>   