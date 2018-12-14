<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coleta extends Model
{
  protected $fillable = ['user_id', 'endereco', 'qtd', 'tipos', 'disp'];

  public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
