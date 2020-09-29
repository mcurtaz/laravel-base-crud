<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // migration crea la tabella nel database. Si crea una nuova migration con il comando php artisan make:migration create_nometabella_table (l'unica cosa da cambiare e` il nome tabella). se si utilizza un nome tabella al plurale (la best practice lo richiederebbe al singolare ma laravel va in controtendenza su quest'aspetto) laravel ti facilita le cose (ad esempio associa automaticcamente un model con lo stesso nome al singolare esempio tabella posts e model Post) ovviamente funziona solo utilizzando l'inglese. Creata la migration si avviano le operazioni di creazione della tabella nel database con il comando php artisan migrate:refresh (comando che lancia prima la funzione down che elimina eventuali tabelle gia` create con lo stesso nome e poi lancia la up che crea la tabella) 
        Schema::create('posts', function (Blueprint $table) {
            // Schema::create crea la tabella. Qua si definiscono le colonne della tabella. le possibilita` sono spiegate molto bene nella documentazione https://laravel.com/docs/7.x/migrations#columns

            // in poche parole si tratta di definire il tipo di dato, la chiave (nome della colonna) ed eventualmente si puo` aggiungere un valore di defaul, se il dato e` nullable (accetta NULL come valore) e se e` unique (cioe` non si puo` ripetere lo stesso valore in altre righe della tabella  tipo lo username che non se ne possono avere due uguali).

            // id e timestamps (che crea created_at e updated_at) sono presenti e definiti di default. comunque si possono modificare e` tutto spiegato nella documentazione
            $table->id();

            $table -> string('title', 60);
            $table -> text('text');
            $table -> string('category', 40);
            $table -> unsignedInteger('like');
            $table -> unsignedInteger('dislike');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
