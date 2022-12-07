<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    use HasFactory;

    protected $table = 'funcionarios';
    protected $fillable = [ 
      'matricula',
      'nome',
      'cpf',
      'rg',
      'dat_nasc',
      'email',
      'telefone',
      'salario',
      'admissao',
      'demissao',
      'empresa_id'
      ,
    ];


      public function empresa(){
        return $this->BelongsTo(empresa::class);
    }
}
