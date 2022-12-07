@csrf
<div class="form-group">
    <label for=""><b>NOME:</b></label>
    <input type="text" name="nome" class="form-control @error('nome') is-invalid  @enderror" value="{{$contato->nome ?? old("nome")}}">

    @error('nome')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>EMAIL:</b></label>
    <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror" value="{{$contato->email ?? old("email")}}">
    @error('email')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>TELEFONE:</b></label>
    <input type="text" name="telefone" class="form-control @error('telefone') is-invalid  @enderror" value="{{$contato->telefone ?? old("telefone")}}">
    @error('telefone')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>DESCRIÇÃO:</b></label>
    <textarea type="text" name="descricao" class="form-control @error('descricao') is-invalid  @enderror" value="{{$contato->descricao ?? old("descricao")}}" rows="10">{{$contato->descricao ?? ''}}</textarea>
    @error('descricao')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>