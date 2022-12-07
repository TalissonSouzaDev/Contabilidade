@extends('contabilidade.header.index')

@section('titulo','cadastro de contato')
    

@section('content')
<div class="container">
  
            <div class="card">
                <div class="card-header">
                    <h3> contato:  {{$contato->nome}}</h3>
                </div>

                <div class="card-body">
                   
                   <div class="lista">
                    <ul>
                        <li><b>NOME:</b> {{$contato->nome}}</li>
                        <li><b>TELEFONE:</b> {{$contato->telefone}}</li>
                        <li><b>EMAIL:</b> {{$contato->email}}</li>
                        <li><b>DESCRIÇÃO:</b> {{$contato->descricao}}</li>
                    </ul>
                   </div>
                    
                 
               
            </div>
            <div class="card-footer">
                <form action="{{route('contato.destroy',$contato->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Excluir</button>
                  </form>
            </div>
   
   
</div>
@endsection