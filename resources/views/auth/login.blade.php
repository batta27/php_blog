<x-layout> 
    
    

<x-title
title='Accedi'
>

</x-title>



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
          
             <form  method="POST" action="{{route('login')}}" class="p-4 shadow my-5 rounded-5" >
                @csrf
                           
                <div class="mb-3">
                    <label for="email" class="form-label">Email utente</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                      value="{{old('email')}}" id="email">
                </div>   
                <div class="mb-3">
                    <label for="password" class="form-label">Password utente</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                       id="password">
                </div>   
                              
                <button type="submit" class="btn btn-primary">Accedi</button>
            </form>
        </div>
    </div>
</div>

</x-layout>   