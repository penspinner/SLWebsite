<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function note()
    {
      return $this->hasMany(Note::class);
    }
}
