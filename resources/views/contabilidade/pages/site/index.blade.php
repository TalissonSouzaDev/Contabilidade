@extends('contabilidade.header.index')

@section('titulo','Site')
    

@section('content')
<div class="container">
  @include('alert.index')
<div class="card-elemente-header">
  <a href="{{route('site.create')}}" class="btn btn-success">Add</a>


                    <form action="{{route('site.index')}}" method="post" >
                      @csrf
                      <div class="form-group search">
                        <input type="text" class="form-control" name="filter">
                        <button class="btn btn-dark">Pequisa</button>
                      </div>
                    </form>

</div>
  <div class="flex-card">
       @foreach ($site as $sites)

       <div class="card" style="width:400px; height:40vh">
        <h4 class="card-title">{{$sites->nome}}</h4>
        <div class="card-body">
         
    <img class="card-img-top" src="{{asset("storage/$sites->img")}}" alt="Card image" style="width:19vw;height:20vh"><br>
      <div class="elemento-card">
      <a href="{{$sites->url}}" target="__blank" class="btn btn-primary">Ir para o site</a>
      <a href="{{route('site.edit',[$sites->id])}}" class="btn btn-warning">edita</a>
      

      <form action="{{route('site.destroy',$sites->id)}}" method="post">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">Excluir</button>
      </form>

    </div>
          
          
        </div>
      </div>
    
           
       @endforeach 
      </div>

      <ul class="pagination justify-content-center" style="margin:20px 0">
        <li class="page-item">{{$site->links()}}</li>
      </ul>

        
</div>


@endsection