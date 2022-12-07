@extends('contabilidade.header.index')

@section('titulo','atualiza instituicao')
    

@section('content')
<div class="container">
  
            <div class="card">
                <div class="card-header">
                    <h3>Atualizar cadastro da Instituição {{$instituicao->nome}}</h3>
                </div>

                <div class="card-body">
                    <form action="{{route('instituicao.update',[$instituicao->id])}}" method="post" class="form">
                        @method('put')
                        
                        @include('contabilidade.pages.instituicao._form.index')
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning">Atualizar</button>
                        </div>

                    </form>
                    
                 
               
            </div>
   
   
</div>
@endsection