<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Gus',
            'email' => 'gus@mail.com',
            'password' => bcrypt('gusabc123')
        ]);

        User::factory(19)->hasPosts(4)->create();

    }
}
