<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = array(
            array(
                'image' => 'Rima.png',
                'full_name_en' => 'Rima Darbinyan',
                'profession_en' => 'Chairman of the Board of Trustees',
                'full_name_ru' => 'Рима Дарбинян',
                'profession_ru' => 'Председатель попечительского совета',
                'full_name_hy' =>  'Ռիմա Դարբինյան',
                'profession_hy' => 'Հոգաբարձուների խորհրդի նախագաh',
                'created_at' => NUll,
                'updated_at' => NULL),
            array(
                'image' => 'Ani.png',
                'full_name_en' =>'Ani Rostomyan',
                'profession_en' => 'Member of the Board of Trustees',
                'full_name_ru' => 'Ани Ростомян',
                'profession_ru' => 'Член попечительского совета',
                'full_name_hy' => 'Անի Ռոստոմյան',
                'profession_hy' => 'Հոգաբարձուների խորհրդի անդամ',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            array(
                'image' => 'Armine.png',
                'full_name_en' =>'Armine Stepanyan',
                'profession_en' => 'Member of the Board of Trustees',
                'full_name_ru' => 'Армине Степанян',
                'profession_ru' => 'Член попечительского совета',
                'full_name_hy' => 'Արմինե Ստեփանյան',
                'profession_hy' => 'Հոգաբարձուների խորհրդի անդամ',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            array(
                'image' => 'Marta.png',
                'full_name_en' =>'Marta Simonyan',
                'profession_en' => 'Member of the Board of Trustees',
                'full_name_ru' => 'Марта Симонян',
                'profession_ru' => 'Член попечительского совета',
                'full_name_hy' => 'Մարթա Սիմոնյան',
                'profession_hy' => 'Հոգաբարձուների խորհրդի անդամ',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            array(
                'image' => 'Sharmagh.png',
                'full_name_en' =>'Sharmagh Sakunts',
                'profession_en' => 'Member of the Board of Trustees',
                'full_name_ru' => 'Шармах Сакунц',
                'profession_ru' => 'Член попечительского совета',
                'full_name_hy' => 'Շարմաղ Սաքունց',
                'profession_hy' => 'Հոգաբարձուների խորհրդի անդամ',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            array(
                'image' => 'Tatev.png',
                'full_name_en' =>'Tatevik Grigoryan',
                'profession_en' => 'Member of the Board of Trustees',
                'full_name_ru' => 'Татевик Григорян',
                'profession_ru' => 'Член попечительского совета',
                'full_name_hy' => 'Տաթևիկ Գրիգորյան',
                'profession_hy' => 'Հոգաբարձուների խորհրդի անդամ',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            array(
                'image' => 'Vahag.png',
                'full_name_en' => 'Vahagn Hambardzumyan',
                'profession_en' => 'Member of the Board of Trustees',
                'full_name_ru' => 'Ваагн Амбарцумян',
                'profession_ru' => 'Член попечительского совета',
                'full_name_hy' => 'Վահագն Համբարձումյան',
                'profession_hy' => 'Հոգաբարձուների խորհրդի անդամ',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            array(
                'image' => 'Sargis.png',
                'full_name_en' => 'Sargis Meliksetya',
                'profession_en' => 'Founder / Executive Director',
                'full_name_ru' => 'Саркис Меликсетян',
                'profession_ru' => 'Учредитель / исполнительный директор',
                'full_name_hy' => 'Սարգիս Մելիքսեթյան',
                'profession_hy' => 'Հիմնադիր / Գործադիր տնօրեն',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            array(
                'image' => 'Amalya.png',
                'full_name_en' => 'Amalya Vardanyan',
                'profession_en' => 'Pharmacist',
                'full_name_ru' => 'Амаля Варданян',
                'profession_ru' => 'Фармацевт',
                'full_name_hy' => 'Ամալյա Վարդանյան',
                'profession_hy' => 'Դեղագետ',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            array(
                'image' => 'Magda.png',
                'full_name_en' => 'Magda Sargsyan',
                'profession_en' => 'Pharmacist',
                'full_name_ru' => 'Магда Саргсян',
                'profession_ru' => 'Фармацевт',
                'full_name_hy' => 'Մագդա Սարգսյան',
                'profession_hy' => 'Դեղագետ',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            array(
                'image' => 'Mariam.png',
                'full_name_en' => 'Mariam Karapetyan',
                'profession_en' => 'lawyer',
                'full_name_ru' => 'Мариам Карапетян',
                'profession_ru' => 'Юрист',
                'full_name_hy' => 'Մագդա Սարգսյան',
                'profession_hy' => 'Իրավաբան',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            array(
                'image' => 'Ruzanna.png',
                'full_name_en' => 'Ruzanna',
                'profession_en' => 'Dermatologist',
                'full_name_ru' => 'Рузанна Мхоян',
                'profession_ru' => 'Дерматолог',
                'full_name_hy' => 'Ռուզաննա Մխոյան',
                'profession_hy' => 'Մաշկաբան',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            array(
                'image' => 'Stella.png',
                'full_name_en' => 'Stella Karamyan',
                'profession_en' => 'Pharmacist',
                'full_name_ru' => 'Стелла Карамян',
                'profession_ru' => 'Фармацевт',
                'full_name_hy' => 'Ստելլա Քարամյան',
                'profession_hy' => 'Դեղագետ',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
        );
        for($i = 0; $i < count($members); $i++){
            DB::table("about")->insert([
                "image" => $members[$i]["image"],
                "full_name_en" => $members[$i]["full_name_en"],
                "profession_en" => $members[$i]["profession_en"],
                "full_name_ru" => $members[$i]["full_name_ru"],
                "profession_ru" => $members[$i]["profession_en"],
                "full_name_hy" => $members[$i]["full_name_hy"],
                "profession_hy" => $members[$i]["profession_hy"],
                "created_at" => $members[$i]["created_at"],
                "updated_at" => $members[$i]["updated_at"]
            ]);
        }

    }
}
