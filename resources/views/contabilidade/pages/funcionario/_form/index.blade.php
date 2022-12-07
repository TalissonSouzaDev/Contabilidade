@csrf
<div class="form-group">
    <label for=""><b>MATRICULA:</b></label>
    <input type="number" name="matricula" class="form-control  @error('matricula') is-invalid  @enderror" value="{{ old("matricula")}}">
    @error('matricula')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>NOME:</b></label>
    <input type="text" name="nome" class="form-control  @error('nome') is-invalid  @enderror" value="{{ old("nome")}}">
    @error('nome')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>CPF:</b></label>
    <input type="text" name="cpf" class="form-control  @error('cpf') is-invalid  @enderror" value="{{old("cpf")}}">
    @error('cpf')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>RG:</b></label>
    <input type="text" name="rg" class="form-control  @error('rg') is-invalid  @enderror" value="{{old("rg")}}">
    @error('rg')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>DATA DE NASCIMENTO:</b></label>
    <input type="date" name="dat_nasc" class="form-control  @error('dat_nasc') is-invalid  @enderror" value="{{ old("dat_nasc")}}">
    @error('dat_nasc')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>EMAIL:</b></label>
    <input type="email" name="email" class="form-control  @error('email') is-invalid  @enderror" value="{{ old("email")}}">
    @error('email')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>TELEFONE:</b></label>
    <input type="text" name="telefone" class="form-control  @error('telefone') is-invalid  @enderror" value="{{old("telefone")}}">
    @error('telefone')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>SALARIO:</b></label>
    <input type="text" name="salario" class="form-control  @error('salario') is-invalid  @enderror" value="{{ old("salario")}}">
    @error('salario')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
    <label for=""><b>DATA DE ADMISSÃO:</b></label>
    <input type="date" name="admissao" class="form-control  @error('admissao') is-invalid  @enderror" value="{{ old("admissao")}}">
    @error('admissao')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>