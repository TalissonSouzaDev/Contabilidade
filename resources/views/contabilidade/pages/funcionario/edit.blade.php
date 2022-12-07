@extends('contabilidade.header.index')

@section('titulo','cadastro de Funcionario')
    

@section('content')
<div class="container">
    @include('alert.index')
            <div class="card">
                <div class="card-header">
                    <h4>Atualizar cadastro do funcionario: {{$funcionario->nome}} (empresa :  {{$empresa->nome}})</h4>
                </div>

                <div class="card-body">
                    <form action="{{route('funcionario.update',[$empresa->id,$funcionario->id])}}" method="post" class="form">
                        @method('put')
                        
                        @include('contabilidade.pages.funcionario._form.edit_form')
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning">Atualizar</button>
                        </div>

                    </form>
                    
                 
               
            </div>
   
   
</div>
@endsection