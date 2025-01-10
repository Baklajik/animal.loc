<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;
use App\Models\User;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::getRegularUsers();

        /** @var User $user */
        foreach($users as $user){
            if($user->address()->exists()){
                Address::factory()->create([
                    'user_id' => $user->id
                ]);
            }
        }
    }
}
