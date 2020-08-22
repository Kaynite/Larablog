<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    public function run()
    {
        DB::table('pages')->insert([[
            'title'         => 'About Us',
            'slug'          => 'about-us',
            'body'          => '<h2>Our story</h2><p>Lorem ipsum dolor sit amet, mea ad idque detraxit, cu soleat graecis invenire eam. Vidisse suscipit liberavisse has ex, vocibus patrioque vim et, sed ex tation reprehendunt. Mollis volumus no vix, ut qui clita habemus, ipsum senserit est et. Ut has soluta epicurei mediocrem, nibh nostrum his cu, sea clita electram reformidans an.</p><blockquote><p>Ei prima graecis consulatu vix, per cu corpora qualisque voluptaria. Bonorum moderatius in per, ius cu albucius voluptatum. Ne ius torquatos dissentiunt. Brute illum utroque eu quo. Cu tota mediocritatem vis, aliquip cotidieque eu ius, cu lorem suscipit eleifend sit.</p><p>John Doe</p></blockquote><h2>Our Vision</h2><p>Est in saepe accusam luptatum. Purto deleniti philosophia eum ea, impetus copiosae id mel. Vis at ignota delenit democritum, te summo tamquam delicata pro. Utinam concludaturque et vim, mei ullum intellegam ei. Eam te illum nostrud, suas sonet corrumpit ea per. Ut sea regione posidonium. Pertinax gubergren ne qui, eos an harum mundi quaestio.</p><p>Nihil persius id est, iisque tincidunt abhorreant no duo. Eripuit placerat mnesarchum ius at, ei pro laoreet invenire persecuti, per magna tibique scriptorem an. Aeque oportere incorrupte ius ea, utroque erroribus mel in, posse dolore nam in. Per veniam vulputate intellegam et, id usu case reprimique, ne aperiam scaevola sed. Veritus omnesque qui ad. In mei admodum maiorum iracundia, no omnis melius eum, ei erat vivendo his. In pri nonumes suscipit.</p>',
            'description'   => 'About Us Page',
            'created_by'    => '1',
            'created_at'    =>  date("Y-m-d H:i:s")
        ],
        [
            'title'         => 'Contact Us',
            'slug'          => 'contact-us',
            'body'          => '<div class="col-md-12"><div class="section-row"><div class="section-title"><h2 class="title">Contact Information</h2></div><p>Malis debet quo et, eam an lorem quaestio. Mea ex quod facer decore, eu nam mazim postea. Eu deleniti pertinacia ius. Ad elitr latine eam, ius sanctus eleifend no, cu primis graecis comprehensam eum. Ne vim prompta consectetuer, etiam signiferumque ea eum.</p><ul class="contact"><li><i class="fa fa-phone"></i> 202-555-0194</li><li><i class="fa fa-envelope"></i> <a href="#">callie@email.com</a></li><li><i class="fa fa-map-marker"></i> 123 6th St.Melbourne, FL 32904</li></ul></div><div class="section-row"><div class="section-title"><h2 class="title">Mail us</h2></div><form><div class="row"><div class="col-md-12"><div class="form-group"><input class="input" type="email" name="email" placeholder="Email"></div></div><div class="col-md-12"><div class="form-group"><input class="input" type="text" name="subject" placeholder="Subject"></div></div><div class="col-md-12"><div class="form-group"><textarea class="input" name="message" placeholder="Message"></textarea></div><button class="primary-button">Submit</button></div></div></form></div></div>',
            'description'   => 'About Us Page',
            'created_by'    => '1',
            'created_at'    =>  date("Y-m-d H:i:s")
        ]]);
    }
}
