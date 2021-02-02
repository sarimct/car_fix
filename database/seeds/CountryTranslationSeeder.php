<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CountryTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country_translations')->insert([
            [
                'id'         => 1,
                'country_id' => 1,
                'locale'     => 'en',
                'name'       => 'UAE',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 2,
                'country_id' => 2,
                'locale'     => 'en',
                'name'       => 'Kuwait',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 3,
                'country_id' => 3,
                'locale'     => 'en',
                'name'       => 'Bahrain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 4,
                'country_id' => 4,
                'locale'     => 'en',
                'name'       => 'Oman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 6,
                'country_id' => 6,
                'locale'     => 'en',
                'name'       => 'Jordan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 7,
                'country_id' => 7,
                'locale'     => 'en',
                'name'       => 'KSA',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}