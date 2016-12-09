<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['name', 'content'];
    protected $dateFormat = 'Y-m-d H:i:s';
    
    public function card()
    {
      return $this->belongsTo(Card::class);
    }
}
