@extends('contabilidade.header.index')

@section('titulo','cadastro de funcionario')
    

@section('content')
<div class="container">
    @include('alert.index')
            <div class="card">
                <div class="card-header">
                    <h2>Cadastro de funcionario da empresa: {{$empresa->nome}}</h2>
                </div>

                <div class="card-body">
                    <form action="{{route('funcionario.store',$empresa->id)}}" method="post" class="form">
                        
                        @include('contabilidade.pages.funcionario._form.index')
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Enviar</button>
                        </div>

                    </form>
                    
                 
               
            </div>
   
   
</div>
@endsection