@extends('contabilidade.header.index')

@section('titulo','atualiza site')
    

@section('content')
<div class="container">
    @include('alert.index')
            <div class="card">
                <div class="card-header">
                    <h3>Atualizar cadastro do site {{$site->nome}}</h3>
                </div>

                <div class="card-body">
                    <form action="{{route('site.update',[$site->id])}}" method="post" class="form" enctype="multipart/form-data">
                        @method('put')
                        
                        @include('contabilidade.pages.site._form.index')
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning">Atualizar</button>
                        </div>

                    </form>
                    
                 
               
            </div>
   
   
</div>
@endsection