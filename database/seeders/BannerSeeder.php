<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'title_ru' => 'Рекламный баннер',
            'title_kz' => 'Рекламный баннер',
            'title_en' => 'Рекламный баннер',
            'description_ru' => 'Рекламный баннер текст',
            'description_kz' => 'Рекламный баннер текст',
            'description_en' => 'Рекламный баннер текст',
            'button_text_ru' => 'Подробнее',
            'button_text_kz' => 'Толығырақ',
            'button_text_en' => 'More details',
            'link' => 'https://googe.kz',
            'image' => '-',
            'bg_image' => '-',
        ]);
    }
}
