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
        for($i = 0;$i<5;$i++) {
            DB::table('news')->insert([
                'image' => $faker->image(),
                'short_content' => $faker->sentences($nb = 3, $asText = true),
                'content' => $faker->paragraphs($nb = 3, $asText = true),
                'created_at' => now()
            ]);
        }
    }
}
