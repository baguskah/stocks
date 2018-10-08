<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\history;

class emiten extends Model
{
    public function histories()
    {
      return $this->hasMany(history::class,'emiten_id');
    }
}
