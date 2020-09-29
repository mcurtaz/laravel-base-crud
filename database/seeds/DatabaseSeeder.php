<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // questa funzione richiama i seeder che si attivano al comando php artisan migrate:refresh `--seed . Se si volessero chiamare piu` seeder si mettono nell'argomento tipo array $this->call([Seeder1:class, Seeder2:class, ..])
        $this->call(PostSeeder::class);
    }
}
