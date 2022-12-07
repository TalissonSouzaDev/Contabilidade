<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';
    protected $fillable = [ 
      'nome',
      'cnpj',
      'email',
      'telefone',
      'user_id'
    ];
  
  
      public function funcionario(){
          return $this->HasMany(funcionario::class);
      }

      public function user(){
        return $this->BelongsTo(User::class);
    }
}
