<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            
             <form  method="POST" action="{{route('article.store')}}" class="p-4 shadow my-5 rounded-5" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo dell'articolo</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                      value="{{old('title')}}" id="title">
                {{-- @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                @enderror --}}
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Autore dell'articolo</label>
                    <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" id="author"
                      value="{{old('author')}}" id="author">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Inserisci immagine</label>
                    <input type="file" name="img" class="form-control" id="img">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Testo dell'articolo</label>
                    <textarea name="body" class="form-control m-control @error('body') is-invalid @enderror" id="body" cols="30" rows="10">{{old('body')}}</textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Inserisci articolo</button>
            </form>
        </div>
    </div>
</div>