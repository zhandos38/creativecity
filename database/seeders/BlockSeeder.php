<?php

namespace Database\Seeders;

use App\Models\Block;
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Block::create([
            'title_ru' => 'Сейлз-хаус по продажам наружной рекламы Creative City',
            'title_kz' => 'Сейлз-хаус по продажам наружной рекламы Creative City',
            'title_en' => 'Сейлз-хаус по продажам наружной рекламы Creative City',
            'description_ru' => 'Один из крупнейших операторов наружной рекламы в городе Алматы. Более 400 рекламных конструкций в собственности.',
            'description_kz' => 'Один из крупнейших операторов наружной рекламы в городе Алматы. Более 400 рекламных конструкций в собственности.',
            'description_en' => 'Один из крупнейших операторов наружной рекламы в городе Алматы. Более 400 рекламных конструкций в собственности.',
        ]);
    }
}
