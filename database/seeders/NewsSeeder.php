<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $fakerRu = Faker::create('ru_RU');
        for($i = 0;$i<5;$i++) {
            DB::table('news')->insert([
                'image' => $faker->image(),
                'short_content_en' => $faker->sentences($nb = 3, $asText = true),
                'content_en' => $faker->sentences($nb = 15, $asText = true),
                'short_content_ru' => $fakerRu->realText(),
                'content_ru' => $fakerRu->realText(200,1),
                'short_content_hy' => $faker->sentences($nb = 3, $asText = true),
                'content_hy' => $faker->paragraphs($nb = 3, $asText = true),
                'created_at' => now()
            ]);
        }
    }
}
