<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // qua come sempre si definiscono quali campi della tabella possono essere inseriti dall'utente (non vengono gestiti in automatico come l'id ad esempio). anche per creare dati fake con il factory e il faker vanno definiti quali campi si possono valorizzare

    //NOTE: non ho definito $table = 'posts' perche` alla creazione della migration ho usato un nome inglese al plurale quindi si associa in automatico con il model al singolare Post. cio` non toglie che potrei esplicitarlo o associarlo ad un altra tabella (che sarebbe comunque da non fare per evitare confusioni)
    protected $fillable = [
        'title',
        'text',
        'category',
        'like',
        'dislike'
    ];
}
