<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class site extends Model
{
    use HasFactory;

    protected $table = 'sites';
    protected $fillable = [ 
      'nome',
      'url',
      'img',
      'user_id',
      'instituicao_id'
    ];
      public function user(){
          return $this->BelongsTo(User::class);
      }

      public function instituicao(){
        return $this->BelongsTo(instituicao::class);
    }
}
