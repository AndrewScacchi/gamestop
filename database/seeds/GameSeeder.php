<?php

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
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
                'nome' => 'Cod 2',
                'editore' => 'Activision',
                'prezzo' => '19.99€',
                'trama' => 'Sei un soldato, ammazza altri soldati'
            ],
            [
                'nome' => 'Jak 3',
                'editore' => 'Nauthydog',
                'prezzo' => '19.99€',
                'trama' => 'Sei bandito nel deserto, torna a casa'
            ],
            [
                'nome' => 'Assassins Creed',
                'editore' => 'Ubisoft',
                'prezzo' => '19.99€',
                'trama' => 'Sei un assassino, ammazza i cattivi'
            ],
        ];

        foreach ($games as $game) {
            Game::create($game);
        }

    }
}
