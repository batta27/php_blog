<div class="card" style="width: 18rem;">
<img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">Titolo articolo : {{$article->title}}</h4>
    <h6 class="card-text">Autore : @if($article->user) {{$article->user->name}} @else Utente non definito @endif</h6>
    <p class="card-text">Testo : {{$article->body}}</p>
    <a href="{{route('article.show',compact('article'))}}" class="btn btn-primary">Dettaglio</a>
  </div>
</div>

<!-- <a href="{{route('homepage',['id'=>$article['id']])}}" class="btn btn-primary">Torna in homepage</a> -->
