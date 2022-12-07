@extends('contabilidade.header.index')

@section('titulo','cadastro de site')
    

@section('content')
<div class="container">
    @include('alert.index')
            <div class="card">
                <div class="card-header">
                    <h1>Cadastro de site</h1>
                </div>

                <div class="card-body">
                    <form action="{{route('site.store')}}" method="post" class="form" enctype="multipart/form-data">
                        
                        @include('contabilidade.pages.site._form.index')
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Enviar</button>
                        </div>

                    </form>
                    
                 
               
            </div>
   
   
</div>
@endsection