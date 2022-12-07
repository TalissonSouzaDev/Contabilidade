@extends('contabilidade.header.index')

@section('titulo','Funcionario')
    

@section('content')
<div class="container">
  @include('alert.index')
            <div class="card">
                <div class="card-header">
                    <h2>Funcionarios da empresa: {{$empresa->nome}}</h2>


                    <form action="{{route('funcionario.index',$empresa->id)}}" method="post" >
                      @csrf
                      <div class="form-group search">
                        <input type="text" class="form-control" name="filter">
                        <button class="btn btn-dark">Pequisa</button>
                      </div>
                    </form>


                </div>

                <div class="card-body">
                    <a href="{{route('funcionario.create',$empresa->id)}}" class="btn btn-success">Add</a>
                  
                   

                    <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Nome</th>
                        
                        
                            <th>Email</th>
                            <th>Telefone</th>
                            <th >Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($funcionario as $funcionarios)
                          <tr>
                            <td>{{$funcionarios->nome}}</td>
                          
                           
                            <td>{{$funcionarios->email}}</td>
                            <td>{{$funcionarios->telefone}}</td>


                            <td>
                              
                              <a href="{{route('funcionario.show',[$funcionarios->id,$empresa->id])}}" class="btn btn-info">Ver</a>
                              <a href="{{route('funcionario.edit',[$funcionarios->id,$empresa->id])}}" class="btn btn-warning">edita</a>
                             
                            </td>
                       
                          </tr>
                              
                          @endforeach
                         
                         
                        </tbody>
                      </table>
               
            </div>

            <div class="card-footer">
              <ul class="pagination justify-content-center" style="margin:20px 0">
                <li class="page-item">{{$funcionario->links()}}</li>
              </ul>
            </div>
   
   
</div>
@endsection
