@extends('contabilidade.header.index')

@section('titulo','cadastro de empresa')
    

@section('content')
<div class="container">
  
            <div class="card">
                <div class="card-header">
                    <h3> Empresa:  {{$empresa->nome}}</h3>
                </div>

                <div class="card-body">
                   
                   <div class="lista">
                    <ul>
                        <li><b>NOME:</b> {{$empresa->nome}}</li>
                        <li><b>CNPJ:</b> {{$empresa->cnpj}}</li>
                        <li><b>EMAIL:</b> {{$empresa->email}}</li>
                        <li><b>TELEFONE:</b> {{$empresa->telefone}}</li>
                    </ul>
                   </div>
                    
                 
               
            </div>
            <div class="card-footer">
                <form action="{{route('empresa.destroy',$empresa->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Excluir</button>
                  </form>
            </div>
   
   
</div>
@endsection