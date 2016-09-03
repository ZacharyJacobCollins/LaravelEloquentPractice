Some queries

    * If we have Card object can do $card->notes->first() for equivalent $card->notes[0]
    * These two queries are very different
        * $card->notes->first(); this one gets the entire notes collection and then grabs the first notes
        * $card->notes()->first(); this one gets the first of the notes and then returns.  Only one return MUCH more efficient  
            * Defining relationships with eloquent 6:08 in 
    *