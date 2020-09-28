<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    // $table e $fillable sono variabili "interne". I nomi sono definiti. $table serve ad associare il model a una tabella. $fillable serve a definiri quali campi (colonne) possono essere modificate dall'utente nella creazione o aggiornamento di un record (tuple, la riga della tabella)
    protected $table = 'pagamenti';

    protected $fillable = [
        'status',
        'price'
    ];
}
