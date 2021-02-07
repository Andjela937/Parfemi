<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class KompanijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kompanija')->insert(
            [
                ['naziv_kompanija' => 'Dolce&Gabbana'],
                ['naziv_kompanija' => 'Christian Dior'],
                ['naziv_kompanija' => 'Gucci'],
                ['naziv_kompanija' => 'Versace'],
                ['naziv_kompanija' => 'Calvin Klein'],

            ]
        );
    }
}
