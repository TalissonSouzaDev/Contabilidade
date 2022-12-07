@extends('contabilidade.header.index')

@section('titulo','Empresa')
    

@section('content')
<div class="container">
  @include('alert.index')
  
            <div class="card">
                <div class="card-header">
                    <h1>Empresa</h1>


                    <form action="{{route('empresa.index')}}" method="post" >
                      @csrf
                      <div class="form-group search">
                        <input type="text" class="form-control" name="filter">
                        <button class="btn btn-dark">Pequisa</button>
                      </div>
                    </form>


                </div>

                <div class="card-body">
                    <a href="{{route('empresa.create')}}" class="btn btn-success">Add</a>
                  
                   

                    <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Empresa</th>
                        
                        
                            <th>Email</th>
                            <th>Telefone</th>
                            <th >Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($empresa as $empresas)
                          <tr>
                            <td>{{$empresas->nome}}</td>
                          
                           
                            <td>{{$empresas->email}}</td>
                            <td>{{$empresas->telefone}}</td>


                            <td>
                              <a href="{{route('funcionario.index',$empresas->id)}}" class="btn btn-primary">Funcionario</a>
                              <a href="{{route('empresa.show',[$empresas->id])}}" class="btn btn-info">Ver</a>
                              <a href="{{route('empresa.edit',[$empresas->id])}}" class="btn btn-warning">edita</a>
                             
                            </td>
                       
                          </tr>
                              
                          @endforeach
                         
                         
                        </tbody>
                      </table>
               
            </div>

            <div class="card-footer">
              <ul class="pagination justify-content-center" style="margin:20px 0">
                <li class="page-item">{{$empresa->links()}}</li>
              </ul>
            </div>
   
   
</div>
@endsection
