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
        $news = array(
          array(
              "image" => "news1.jpg",
              "content_en" => '<p>On April 28, at the grand opening of the Vanadzor basic school No. 28 named after Vahe Meliksetyan, Vahe&rsquo;s close friends Karlen Nersesyan, Vahagn Hambardzumyan and Alla Hambardzumyan planted a giant sequoia in memory of the immortal heroes of the school. Glory to our heroes.</p>',
              "content_ru" => '<p>28 апреля, на торжественном открытии Ванадзорской основной школы № 28 им. Ваге Меликсетяна близкие друзья Ваге Карлен Нерсесян, Ваагн Амбарцумян и Алла Амбарцумян посадили гигантскую секвойю в память о бессмертных героев школы. Слава нашим героям.</p>',
              "content_hy" => '<p>Ապրիլի 28-ին՝ Վանաձորի Վահե Մելիքսեթյանի անվան թիվ 28 հիմնական դպրոցի հանդիսավոր բացմանը, Վահեի մտերիմ ընկերներ Կառլեն Ներսեսյանը Վահագն և Ալլա Համբարձումյանները ի հիշատակ դպրոցի անմահ հերոսների երկարակեցության և բարձրության խորհրդանիշ համարվող Հսկա Սեքվոյա ծառ տնկեցին։ Փա՛ռք մեր հերոսներին։</p>',
              "created_at" => '2021-08-26 20:00:00',
              "updated_at" => '2021-08-27 07:39:13'
            ),
         array(
             "image" => "news.png",
             "content_en" => '<p><a href=\"http://lori.mtad.am/files/legislation/49430.pdf\" target=\"_blank\">By the order of the Lori Governor</a>&nbsp;Vanadzor Basic School No. 28 of the Lori Region of the RA was named after Vahe Meliksetyan, a graduate of the school, a gold medalist, a clinical pharmacist, a YSMU lecturer, a scientist, and a hero of the Second Artsakh War.</p>',
             "content_ru" => '<p>Ванадзорская основная школа № 28 Лорийской области РА&nbsp;<a href=\"http://lori.mtad.am/files/legislation/49430.pdf\" target=\"_blank\">распоряжением губернатора Лори&nbsp;</a>переименована в честь Ваге Меликсетяна, выпускника школы, золотого медалиста, клинического фармацевта, преподавателя ЕГМУ, ученого, героя Второй Арцахской войны.</p>',
             "content_hy" => '<p>ՀՀ Լոռու մարզի Վանաձորի թիվ 28 հիմնական դպրոցը տնօրինության նախաձեռնությամբ և&nbsp;<a href=\"http://lori.mtad.am/files/legislation/49430.pdf\">Լոռու մարզպետի հրամանով&nbsp;</a>անվանակոչվել է դպրոցի շրջանավարտ, ոսկե մեդալակիր, կլինիկական դեղագետ, ԵՊԲՀ դասախոս, գիտնական, Արցախյան 2-րդ պատերազմի հերոս Վահե Մելիքսեթյանի անունով։</p>',
             "created_at" => '2021-08-26 20:00:00',
             "updated_at" => '2021-08-27 07:39:01'
            ),
        );
        for($i = 0; $i < count($news) ;$i++) {
            DB::table('news')->insert([
                'image' => $news[$i]["image"],
                'content_en' =>$news[$i]["content_en"],
                'content_ru' => $news[$i]["content_ru"],
                'content_hy' => $news[$i]["content_hy"],
                'created_at' => now()
            ]);
        }
    }
}
