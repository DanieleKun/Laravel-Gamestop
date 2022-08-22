<?php

use Illuminate\Database\Seeder;
use App\Models\Game;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = [
            [
                'title' => 'Pokemon',
                'price' => 50,
                'category' => 'RPG',
                'pegi' => 3
            ],

            [
                'title' => 'Fifa 2023',
                'price' => 80,
                'category' => 'simulazione',
                'pegi' => 7
            ],
        
        ];

        foreach ($games as $game) {
            Game::create($game);

        }
    }
}
