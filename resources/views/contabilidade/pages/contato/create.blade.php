@extends('contabilidade.header.index')

@section('titulo','cadastro de contato')
    

@section('content')
<div class="container">
  
            <div class="card">
                <div class="card-header">
                    <h1>Cadastro de Contato</h1>
                </div>

                <div class="card-body">
                    <form action="{{route('contato.store')}}" method="post" class="form">
                        
                        @include('contabilidade.pages.contato._form.index')
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Enviar</button>
                        </div>

                    </form>
                    
                 
               
            </div>
   
   
</div>
@endsection