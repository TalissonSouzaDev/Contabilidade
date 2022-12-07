@csrf
<div class="form-group">
    <label for=""><b>INSTITUIÇÃO:</b></label>
    <input type="text" name="orgao" class="form-control  @error('orgao') is-invalid  @enderror" value="{{$instituicao->orgao ?? old("orgao")}}">

    @error('orgao')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

