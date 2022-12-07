@csrf
<div class="form-group">
    <label for=""><b>NOME:</b></label>
    <input type="text" name="nome" class="form-control" value="{{$funcionario->nome }}">
</div>

<div class="form-group">
    <label for=""><b>CPF:</b></label>
    <input type="text" name="cpf" class="form-control" value="{{$funcionario->cpf }}">
</div>

<div class="form-group">
    <label for=""><b>RG:</b></label>
    <input type="text" name="rg" class="form-control" value="{{$funcionario->rg }}">
</div>

<div class="form-group">
    <label for=""><b>DATA DE NASCIMENTO:</b></label>
    <input type="date" name="dat_nasc" class="form-control" value="{{ $funcionario->dat_nasc}}">
   
</div>

<div class="form-group">
    <label for=""><b>EMAIL:</b></label>
    <input type="email" name="email" class="form-control" value="{{$funcionario->email }}">
</div>

<div class="form-group">
    <label for=""><b>TELEFONE:</b></label>
    <input type="text" name="telefone" class="form-control" value="{{$funcionario->telefone }}">
</div>

<div class="form-group">
    <label for=""><b>SALARIO:</b></label>
    <input type="text" name="salario" class="form-control" value="{{$funcionario->salario }}">
</div>

<div class="form-group">
    <label for=""><b>DATA DE ADMISSÃO:</b></label>
    <input type="date" name="admissao" class="form-control" value="{{$funcionario->admissao }}">
</div>

<div class="form-group">
    <label for=""><b>DATA DE DEMISSÃO:</b></label>
    <input type="date" name="demissao" class="form-control" value="{{$funcionario->demissao }}">
</div>