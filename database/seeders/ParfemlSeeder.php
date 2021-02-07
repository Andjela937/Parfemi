<?php

namespace Database\Seeders;

use App\Models\Kompanija;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ParfemlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parfem')->insert(
            [
                ['model' => 'THE ONE FOR MEN EDP', 'cena'=>'7200','slika'=>'https://www.prodajaparfema.rs/slir/w235-h400-c235x400-q100/https://www.prodajaparfema.rs/admin/upload/images/20210106143853-20191105215356-d&g-the-one-for-men-edp-50-0ml.jpg','kompanija_id'=>10],
                ['model' => ' LIGHT BLUE LOVE IS LOVE M', 'cena'=>'3240','slika'=>'https://www.prodajaparfema.rs/slir/w235-h400-c235x400-q100/https://www.prodajaparfema.rs/admin/upload/images/20201121171235-d&g-light-blue-love-is-love-muski.jpg','kompanija_id'=>10],
                ['model' => 'LIGHT BLUE SUN', 'cena'=>'2499','slika'=>'https://www.prodajaparfema.rs/slir/w235-h400-c235x400-q100/https://www.prodajaparfema.rs/admin/upload/images/20200717164244-3423478528857-d&g-light-blue-sun-edt-sp-25ml.jpg','kompanija_id'=>10],
                ['model' => 'SAUVAGE DEO', 'cena'=>'4200','slika'=>'https://www.prodajaparfema.rs/slir/w235-h400-c235x400-q100/https://www.prodajaparfema.rs/admin/upload/images/20201121185153-dior-sauvage-deodorant.jpg','kompanija_id'=>11],
                ['model' => 'SAUVAGE EDP', 'cena'=>'12600','slika'=>'https://www.prodajaparfema.rs/slir/w235-h400-c235x400-q100/https://www.prodajaparfema.rs/admin/upload/images/20201121184437-dior-sauvage-edp.jpg','kompanija_id'=>11],
                ['model' => 'J ADORE', 'cena'=>'12000','slika'=>'https://www.prodajaparfema.rs/slir/w235-h400-c235x400-q100/https://www.prodajaparfema.rs/admin/upload/images/20181225145507-christian-dior-jadore-tester.jpeg','kompanija_id'=>11],
                ['model' => 'FLORA', 'cena'=>'6600','slika'=>'https://www.prodajaparfema.rs/slir/w235-h400-c235x400-q100/https://www.prodajaparfema.rs/admin/upload/images/20201224105131-gucci-flora-by-gucci--1-.jpg','kompanija_id'=>12],
                ['model' => 'GUILTY POUR HOMME SET', 'cena'=>'7800','slika'=>'https://www.prodajaparfema.rs/slir/w235-h400-c235x400-q100/https://www.prodajaparfema.rs/admin/upload/images/20201121190133-gucci-guilty-men-90ml-edt-deo-stick-75ml.jpg','kompanija_id'=>12],
                ['model' => 'VERSENSE', 'cena'=>'6000','slika'=>'https://www.prodajaparfema.rs/slir/w235-h400-c235x400-q100/https://www.prodajaparfema.rs/admin/upload/images/20210106201739-versace-versense-dsp_2_2--1---1-.jpg','kompanija_id'=>13],
                ['model' => 'DYLAN BLUE POUR FEMME', 'cena'=>'6880','slika'=>'https://www.prodajaparfema.rs/slir/w235-h400-c235x400-q100/https://www.prodajaparfema.rs/admin/upload/images/20200717183008-8011003839117-dylan-blue-pour-femme-edp-sp-100ml.jpg','kompanija_id'=>13],
                ['model' => 'OBSESSION NIGHT FOR MAN', 'cena'=>'4800','slika'=>'https://www.prodajaparfema.rs/slir/w235-h400-c235x400-q100/https://www.prodajaparfema.rs/admin/upload/images/20201121194850-calvin-klein-obsession-night-for-men-125ml-edt-spray.jpg','kompanija_id'=>14],
                ['model' => 'IN2U FOR HIM', 'cena'=>'2699','slika'=>'https://www.prodajaparfema.rs/slir/w235-h400-c235x400-q100/https://www.prodajaparfema.rs/admin/upload/images/20191105204022-calvin-klein-in2u-him-edt-150-0ml.jpg','kompanija_id'=>14],


            ]
        );
    }
}
