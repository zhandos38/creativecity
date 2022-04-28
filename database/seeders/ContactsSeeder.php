<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'type' => 'presentation',
            'content_ru' => 'ru',
            'content_kz' => 'kz',
            'content_en' => 'en',
        ]);
    }
}
