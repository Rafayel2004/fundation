<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Faker\Factory;
Use Database\Seeders\NewsSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UserAdmin::class,MemberSeeder::class,NewsSeeder::class]);
    }
}
