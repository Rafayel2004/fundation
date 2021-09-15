<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home')->insert([
            "image" => "personal_avatar.png",
            "goal_content_hy" => "<ul>
	<li>Կլինիկական դեղագիտության զարգացմանն ուղղված ներպետական և միջազգային միջոցառումների կազմակերպումը</li>
	<li>Կլինիկական դեղագետ մասնագետների կադրային ապահովումը</li>
	<li>Կլինիկական դեղագիտություն մասնագիտությամբ ուսումնառություն անցնող ուսանողների ֆինանսավորումը, վերապատրաստումը,</li>
	<li>Կլինիկական դեղագիտությունը՝ որպես գիտության առանձին ճյուղի ադապտացումը</li>
</ul>",
            "goal_content_ru" => "<ul>
                                    <li>Организация отечественных и международных мероприятий, направленных на развитие клинической фармации,</li>
                                    <li>Штат клинических фармацевтов,</li>
                                    <li>Финансирование и обучение студентов, изучающих клиническую фармацию,</li>
                                    <li>Адаптация клинической фармации как отдельного раздела науки</li>
                                  </ul>",
            "goal_content_en" => "<ul>
                                    <li>Organizing domestic and international events to develop clinical pharmacy,</li>
                                    <li>Staffing of clinical pharmacists,</li>
                                    <li>Funding and training of students studying clinical pharmacy,</li>
                                    <li>Adaptation of clinical pharmacy as a separate field of science</li>
                                  </ul>",
            "about_hy" => "<p>2005թ.-ին Ոսկե մեդալով ավարտել է Վանաձորի թիվ 28 միջնակարգ դպրոցը: Նույն թվականին ընդունվել է ԵՊԲՀ դեղագիտության ֆակուլտետ՝ ավարտելով այն գերազանց առաջադիմությամբ: Ուսանողական տարիներին արժանացել է «Дружба» անվանական կրթաթոշակին: 2012թ․-ին գերազանցությամբ ավարտել է ԵՊԲՀ օրդինատուրան՝ ստանալով կլինիկական դեղագետի որակավորում: Օրդինատուրայում ուսումնառության տարիներին վերապատրաստման նպատակով մեկնել է Իտալիայի Կամերինոյի համալսարան: </p>",
            "about_ru" => "<p>В 2005 году окончил Ванадзорскую среднюю школу №28 с золотой медалью. В том же году поступил на фармацевтический факультет ЕГМУ, который окончил с отличием. В студенческие годы он был удостоен стипендии «Дружба». В 2012 году с отличием окончил ЕГМУ по специальности клиническая фармакология. Во время своей резидентуры он отправился на стажировку в Университет Камерино в Италии.</p>",
            "about_en" => "<p>About Vahe Meliksetyan In 2005 he graduated from Vanadzor Secondary School No. 28 with a Gold Medal. In the same year he entered YSMU Faculty of Pharmacy, graduating with honors. During his student years he was awarded the 'Druzhba' scholarship. In 2012 he graduated with honors from YSMU, obtaining the qualification of a clinical pharmacist. During his residency, he went to the University of Camerino in Italy for training.</p>"
        ]);
    }
}
