Some queries

    * If we have Card object can do $card->notes->first() for equivalent $card->notes[0]
    * These two queries are very different
        * $card->notes->first(); this one gets the entire notes collection and then grabs the first notes
        * $card->notes()->first(); this one gets the first of the notes and then returns.  Only one return MUCH more efficient  
            * Defining relationships with eloquent 6:08 in 
    * To create a note attached to a particular card that we already have a reference to: $card->notes()->create(['body' => 'Yet another note about this card.']);

Artisan tinker usefulness

        *Run at beginning to see eloquent queries as sql queries DB::listen(function($query) {var_dump($query->sql); });