@extends('contabilidade.header.index')

@section('titulo',"atualiza usuario {$user->name}")
    

@section('content')
<div class="container">
  
            <div class="card">
                <div class="card-header">
                    <h3>Atualizar Registro {{$user->name}}</h3>
                </div>

                <div class="card-body">
                    <form action="{{route('user.update',[$user->id])}}" method="post" class="form">
                        @method('put')
                        
                        @include('contabilidade.pages.user._form.index')
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning">Atualizar</button>
                        </div>

                    </form>
                    
                 
               
            </div>
   
   
</div>
@endsection