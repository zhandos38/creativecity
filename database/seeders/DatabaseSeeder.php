<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Color;
use App\Models\Technology;
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
        $this->call(AdminSeeder::class);
        $this->call(ContactsSeeder::class);
        $this->call(BlockSeeder::class);
        $this->call(BannerSeeder::class);
    }
}
