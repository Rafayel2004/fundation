<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menuEn = ["HOME", "ABOUT", "CONTACT", "NEW", "DONATE"];
        $menuHy = ["ԳԼԽԱՎՈՐ", "ՄԵՐ ՄԱՍԻՆ", "ԿԱՊ", "ՆՈՐՈՒԹՅՈՒՆՆԵՐ", "ՀԱՆԳԱՆԱԿ"];
        $menuRu = ["ГЛАВНАЯ", "О НАС", "КОНТАКТЫ", "НОВОСТИ", "ПОЖЕРТВОВАТЬ"];

        for($i = 0; $i < count($menuEn); $i++){
            DB::table("menu")->insert([
                "menu_name_en" => $menuEn[$i],
                "menu_name_ru" => $menuRu[$i],
                "menu_name_hy" => $menuHy[$i],
            ]);
        }
    }
}
