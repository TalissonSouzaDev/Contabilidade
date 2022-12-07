@extends('contabilidade.header.index')

@section('titulo','cadastro de funcionario')
    

@section('content')
<div class="container">
  
            <div class="card">
                <div class="card-header">
                    <h3> Funcionario:  {{$funcionario->nome}} \ Empresa: {{$empresa->nome}}</h3>
                </div>

                <div class="card-body">
                   
                   <div class="lista">
                    <ul>
                        <li><b>MATRICULA:</b> {{$funcionario->matricula}}</li>
                        <li><b>NOME:</b> {{$funcionario->nome}}</li>
                        <li><b>CPF:</b> {{$funcionario->cpf}}</li>
                        <li><b>RG:</b> {{$funcionario->rg}}</li>
                        <li><b>DATA DE NASCIMENTO:</b> {{date('d/m/Y',strtotime($funcionario->dat_nasc))}}</li>
                        <li><b>EMAIL:</b> {{$funcionario->email}}</li>
                        <li><b>TELEFONE:</b> {{$funcionario->telefone}}</li>

                        <li><b>DATA DE ADMISSÃO:</b> {{date('d/m/Y',strtotime($funcionario->admissao))}}</li>
                        <li><b>DATA DE DEMISSÃO:</b> {{$funcionario->demissao  ?? 'Não consta'}}</li>
                    </ul>
                   </div>
                    
                 
               
            </div>
            <div class="card-footer">
                <form action="{{route('funcionario.destroy',[$funcionario->id,$empresa->id])}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Excluir</button>
                  </form>
            </div>
   
   
</div>
@endsection