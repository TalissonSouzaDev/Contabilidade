@extends('contabilidade.header.index')

@section('titulo','Empresa')
    

@section('content')
<div class="container">
  @include('alert.index')
            <div class="card">
                <div class="card-header">
                    <h1>Instituição</h1>


                    <form action="{{route('instituicao.index')}}" method="post" >
                      @csrf
                      <div class="form-group search">
                        <input type="text" class="form-control" name="filter">
                        <button class="btn btn-dark">Pequisa</button>
                      </div>
                    </form>


                </div>

                <div class="card-body">
                    <a href="{{route('instituicao.create')}}" class="btn btn-success">Add</a>
                  
                   

                    <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Instituição</th>
                            <th class="button-form" >Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($instituicao as $instituicaos)
                          <tr>
                            <td>{{$instituicaos->orgao}}</td>
                        


                            <td class="button-form">
                             
                            
                              <a href="{{route('instituicao.edit',[$instituicaos->id])}}" class="btn btn-warning">edita</a>
                              <form action="{{route('instituicao.destroy',$instituicaos->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Excluir</button>
                              </form>
                             
                            </td>
                       
                          </tr>
                              
                          @endforeach
                         
                         
                        </tbody>
                      </table>
               
            </div>

            <div class="card-footer">
              <ul class="pagination justify-content-center" style="margin:20px 0">
                <li class="page-item">{{$instituicao->links()}}</li>
              </ul>
            </div>
   
   
</div>
@endsection
