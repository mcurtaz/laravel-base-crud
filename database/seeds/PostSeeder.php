<?php

use Illuminate\Database\Seeder;
// ATTENZIONE: importante qua importare il model con use App\Model
use App\Post;

// ATTENZIONE: La seeder del post non si lancia in automatico. Innanzi tutto deve essere specificato nel DatabaseSeeder quali seeder vengono lanciati. Secondo quando si lancia da terminale il comando php artisan migrate:refresh va aggiunto l'argomento --seed
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // questa e` la riga che chiama la factory che crea i dati fake. factory e create sono due funzioni di laravel. il 50 come argomento di factory dice quante righe con dati fake creare.
        factory(Post::class, 50) -> create();
    }
}
