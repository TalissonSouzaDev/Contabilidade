@extends('contabilidade.header.index')

@section('titulo','cadastro de contato')
    

@section('content')
<div class="container">
  
            <div class="card">
                <div class="card-header">
                    <h3>Atualizar cadastro da contato {{$contato->nome}}</h3>
                </div>

                <div class="card-body">
                    <form action="{{route('contato.update',[$contato->id])}}" method="post" class="form">
                        @method('put')
                        
                        @include('contabilidade.pages.contato._form.index')
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning">Atualizar</button>
                        </div>

                    </form>
                    
                 
               
            </div>
   
   
</div>
@endsection