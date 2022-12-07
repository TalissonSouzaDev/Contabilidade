@csrf
<div class="form-group">
    <label for=""><b>EMPRESA:</b></label>
    <input type="text" name="nome" class="form-control @error('nome') is-invalid  @enderror" value="{{$empresa->nome ?? old("nome")}}">

    @error('nome')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>CNPJ:</b></label>
    <input type="text" name="cnpj" class="form-control @error('cnpj') is-invalid  @enderror " value="{{$empresa->cnpj ?? old("cnpj")}}">
    @error('cnpj')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>EMAIL:</b></label>
    <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror" value="{{$empresa->email ?? old("email")}}">
    @error('email')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>TELEFONE:</b></label>
    <input type="text" name="telefone" class="form-control @error('telefone') is-invalid  @enderror" value="{{$empresa->telefone ?? old("telefone")}}">
    @error('telefone')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>