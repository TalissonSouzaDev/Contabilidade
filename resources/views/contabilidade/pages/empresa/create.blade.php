@extends('contabilidade.header.index')

@section('titulo','cadastro de empresa')
    

@section('content')
<div class="container">
    @include('alert.index')
  
            <div class="card">
                <div class="card-header">
                    <h1>Cadastro de Empresa</h1>
                </div>

                <div class="card-body">
                    <form action="{{route('empresa.store')}}" method="post" class="form">
                        
                        @include('contabilidade.pages.empresa._form.index')
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Enviar</button>
                        </div>

                    </form>
                    
                 
               
            </div>
   
   
</div>
@endsection