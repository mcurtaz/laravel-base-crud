<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post; // Anche qua bisogna importare il model
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) { // di default questa riga la scrive laravel ma bisogna sostituire model con l'effettivo nome del model $facroty->define(Model::class)

    // NOTE: questo e` un array associativo quindi e` composto da chiave => valore e NON chiave -> valore
    return [
        // I valori delle varie chiavi (che corrispondono alle colonne della tabella) verranno riempiti da $faker che e` un progetto su github che e` di base gia` presente in laravel. alla pagina di github e` presente la documentazione. in pratica ha diversi metodo che restituiscono a random parole, frasi, nomi, date ecc ecc. Si puo` anche chiedere al faker valori unique cioe` non ripetuti o dare paramentri in cui stare (ad esempio numero di caratteri, date da a, numeri non piu` grandi di.. ecc ecc).

        //documentazione faker https://github.com/fzaninotto/Faker
        'title' => $faker -> word(),
        'text' => $faker -> text($maxNbChars = 200),
        'category' => $faker -> word(),
        'like' => $faker -> numberBetween($min = 0, $max = 10000),
        'dislike' => $faker -> numberBetween($min = 1000, $max = 10000)
    ];
});
