<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instituicao extends Model
{
    use HasFactory;

    protected $table = 'instituicaos';
    protected $fillable = [ 
      'orgao',
      'user_id',
    ];
      public function contas(){
          return $this->HasMany(contas::class);
      }
  
      public function site(){
          return $this->HasMany(site::class);
      }

      public function user(){
        return $this->BelongsTo(User::class);
    }
}
