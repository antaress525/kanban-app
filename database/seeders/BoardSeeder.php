<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate(
            ['email' => 'johndoe@gmail.com'],
            [
                'name' => 'John Doe',
                'password' => bcrypt('password'), // Default password
            ]
        );

        $boardsData = File::get(database_path('seeders/data/boards.json'));
        $boards = json_decode($boardsData, true);

        foreach ($boards as $boardData) {
            $user->boards()->create($boardData);
        }
    }
}
