<?php

namespace Database\Seeders;

use App\Enum\Role;
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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'SuperAdmin',
        //     'email' => 'root@gmail.com',
        //     'role' => Role::ADMIN,
        // ]);

        // User::factory(10)->create();

        $this ->call(CountrySeeder::class);
    }
}
