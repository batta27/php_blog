<div class="card" style="width: 18rem;">
<img src="{{Storage::url($category->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">Titolo categoria : {{$category->name}}</h4>
    <p class="card-text">Descrizione : {{$category->description}}</p>
    
    @if(Route::currentRouteName() == 'category.index')
    <a href="{{route('category.show',compact('category'))}}" class="btn btn-primary">Dettaglio</a>
    
    @else(Route::currentRouteName() == 'category.index')
    <a href="{{route('category.index',compact('category'))}}" class="btn btn-warning">Torna indietro</a>
    @endif
    <a href="{{route('category.edit',compact('category'))}}" class="btn btn-info">Modifica articolo</a>

    <form action="{{route('category.destroy',compact('category'))}}" method="POST">
    @method('DELETE')  
    @csrf
      <button type="submit" class="btn btn-danger">Elimina articolo</button>
    </form>

</div>
</div>
