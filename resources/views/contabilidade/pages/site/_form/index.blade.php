@csrf
<div class="form-group">
    <label for=""><b>NOME:</b></label>
    <input type="text" name="nome" class="form-control @error('nome') is-invalid  @enderror" value="{{$site->nome ?? old("nome")}}">
    @error('nome')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>URL:</b></label>
    <input type="text" name="url" class="form-control @error('url') is-invalid  @enderror" value="{{$site->url ?? old("url")}}">
    @error('url')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>IMAGEM:</b></label>
    <input type="file" name="img" class="form-control @error('img') is-invalid  @enderror" value="{{$site->img ?? old("img")}}">
    @error('img')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>


<div class="form-group">
    <label for=""><b>INSTITUIÇÃO:</b></label>
    <select name="instituicao_id" class="form-select">
        @foreach ($instituicao as $instituicaos)
        <option value="{{$site->id ?? $instituicaos->id}}">{{$site->orgao ??$instituicaos->orgao}}</option>
            
        @endforeach
    </select>
</div>

