<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['name', 'content'];
    
    public function card()
    {
      return $this->belongsTo(Card::class);
    }
}
