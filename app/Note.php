<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    //This says that the only thing that can be mass assigned through create is the body 
    protected $fillable = ['body'];

    public function card() 
    {
        return $this->belongsTo(Card::class);
    }
}
