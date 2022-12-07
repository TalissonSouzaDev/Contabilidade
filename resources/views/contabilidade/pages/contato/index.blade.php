@extends('contabilidade.header.index')

@section('titulo','contato')
    

@section('content')
<div class="container">
  @include('alert.index')
            <div class="card">
                <div class="card-header">
                    <h1>Contato</h1>


                    <form action="{{route('contato.index')}}" method="post">
                      @csrf
                      <div class="form-group search">
                        <input type="text" class="form-control" name="filter">
                        <button class="btn btn-dark">Pequisa</button>
                      </div>
                    </form>


                </div>

                <div class="card-body">
                    <a href="{{route('contato.create')}}" class="btn btn-success">Add</a>
                  
                   

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
                          @foreach ($contato as $contatos)
                          <tr>
                            <td>{{$contatos->nome}}</td> 
                            <td>{{$contatos->email}}</td>
                            <td>{{$contatos->telefone}}</td>


                            <td>
                      
                              <a href="{{route('contato.show',[$contatos->id])}}" class="btn btn-info">Ver</a>
                              <a href="{{route('contato.edit',[$contatos->id])}}" class="btn btn-warning">edita</a>
                             
                            </td>
                       
                          </tr>
                              
                          @endforeach
                         
                         
                        </tbody>
                      </table>
               
            </div>

            <div class="card-footer">
              <ul class="pagination justify-content-center" style="margin:20px 0">
                <li class="page-item">{{$contato->links()}}</li>
              </ul>
            </div>
   
   
</div>
@endsection
