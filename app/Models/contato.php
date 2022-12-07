<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
    use HasFactory;

    protected $table = 'contatos';
    protected $fillable = [ 
      'nome',
      'telefone',
      'descricao',
      'email',
      'user_id',
    ];
      public function user(){
          return $this->BelongsTo(User::class);
      }
  
      
}
