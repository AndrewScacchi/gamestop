<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'GameStop_Roma',
                'email' => 'gamestoproma@gmail.com',
                'password' => Hash::make('roma'),
            ],
            [
                'name' => 'GameStop_Napoli',
                'email' => 'gamestopnapoli@gmail.com',
                'password' => Hash::make('napoli'),
            ],
            [
                'name' => 'GameStop_Milano',
                'email' => 'gamestopmilano@gmail.com',
                'password' => Hash::make('milano'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

    }
}
