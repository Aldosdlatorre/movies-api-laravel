<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        Movie::insert([
            [
                'title' => 'Inception',
                'synopsis' => 'Un ladrón que roba secretos a través de sueños debe implantar una idea en la mente de un CEO.',
                'cover_url' => 'https://image.tmdb.org/t/p/w500/qmDpIHrmpJINaRKAfWQfftjCdyi.jpg',
                'year' => 2010,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Interstellar',
                'synopsis' => 'Exploradores viajan por un agujero de gusano en busca de un nuevo hogar para la humanidad.',
                'cover_url' => 'https://image.tmdb.org/t/p/w500/rAiYTfKGqDCRIIqo664sY9XZIvQ.jpg',
                'year' => 2014,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Dark Knight',
                'synopsis' => 'Batman se enfrenta al Joker, que amenaza con sumir Gotham en el caos.',
                'cover_url' => 'https://image.tmdb.org/t/p/w500/qJ2tW6WMUDux911r6m7haRef0WH.jpg',
                'year' => 2008,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
