@extends('contabilidade.header.index')

@section('titulo','cadastro de empresa')
    

@section('content')
<div class="container">
    @include('alert.index')
  
            <div class="card">
                <div class="card-header">
                    <h3>Atualizar cadastro da empresa {{$empresa->nome}}</h3>
                </div>

                <div class="card-body">
                    <form action="{{route('empresa.update',[$empresa->id])}}" method="post" class="form">
                        @method('put')
                        
                        @include('contabilidade.pages.empresa._form.index')
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning">Atualizar</button>
                        </div>

                    </form>
                    
                 
               
            </div>
   
   
</div>
@endsection