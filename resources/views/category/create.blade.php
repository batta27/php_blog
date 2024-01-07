<x-layout> 
    
    

<x-title
title='Crea la tua categoria'
>

</x-title>

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            
             <form  method="POST" action="{{route('category.store')}}" class="p-4 shadow my-5 rounded-5" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome categoria</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                      value="{{old('name')}}" id="name">
                {{-- @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                @enderror --}}
                </div>
                
                <div class="mb-3">
                    <select class="form-select" name="category" aria-label="Default select example">
                        <option selected>Seleziona una categoria</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione categoria</label>
                    <textarea name="description" class="form-control m-control @error('description') is-invalid @enderror" id="body" cols="30" rows="10">{{old('description')}}</textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Inserisci categoria</button>
            </form>
        </div>
    </div>
</div>


</x-layout>   