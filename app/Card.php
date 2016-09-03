<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{   
    //function adding in a relationship.
    //You would set the note card_id to the card id column then run $card->notes to get all associated notes
   public function notes() 
   {
       return $this->hasMany(Note::Class);
   } 
}

