<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ADMIN
        $admin = User::factory()->create([
            'name' => 'Администратор',
            'email' => 'info@creativecity.kz',
            'password' => Hash::make('Creative123!@#'),
        ]);
    }
}
