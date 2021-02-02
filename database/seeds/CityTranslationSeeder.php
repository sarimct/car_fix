<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CityTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city_translations')->insert([
            [
                'id'         => 1,
                'city_id'    => 1,
                'locale'     => 'en',
                'name'       => 'Dubai',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 2,
                'city_id'    => 2,
                'locale'     => 'en',
                'name'       => 'Abu Dhabi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 3,
                'city_id'    => 3,
                'locale'     => 'en',
                'name'       => 'Sharjah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 4,
                'city_id'    => 4,
                'locale'     => 'en',
                'name'       => 'Ajman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 5,
                'city_id'    => 5,
                'locale'     => 'en',
                'name'       => 'Al Ain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 6,
                'city_id'    => 6,
                'locale'     => 'en',
                'name'       => 'Fujairah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 7,
                'city_id'    => 7,
                'locale'     => 'en',
                'name'       => 'Umm Al-Quwain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 8,
                'city_id'    => 8,
                'locale'     => 'en',
                'name'       => 'Ras Al Khaima',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 9,
                'city_id'    => 9,
                'locale'     => 'en',
                'name'       => 'Kuwait City (Capital)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 10,
                'city_id'    => 10,
                'locale'     => 'en',
                'name'       => 'Hawally',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 11,
                'city_id'    => 11,
                'locale'     => 'en',
                'name'       => 'Farwaniya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 12,
                'city_id'    => 12,
                'locale'     => 'en',
                'name'       => 'Ahmadi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 13,
                'city_id'    => 13,
                'locale'     => 'en',
                'name'       => 'Al Jahra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 14,
                'city_id'    => 14,
                'locale'     => 'en',
                'name'       => 'Mubarak Al-kabir',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 15,
                'city_id'    => 15,
                'locale'     => 'en',
                'name'       => 'Seeb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 16,
                'city_id'    => 16,
                'locale'     => 'en',
                'name'       => 'Muttrah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 17,
                'city_id'    => 17,
                'locale'     => 'en',
                'name'       => 'Bosher',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 18,
                'city_id'    => 18,
                'locale'     => 'en',
                'name'       => 'Muscat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 19,
                'city_id'    => 19,
                'locale'     => 'en',
                'name'       => 'Amerat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 20,
                'city_id'    => 20,
                'locale'     => 'en',
                'name'       => 'Salalah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 21,
                'city_id'    => 21,
                'locale'     => 'en',
                'name'       => 'Rustaq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 22,
                'city_id'    => 22,
                'locale'     => 'en',
                'name'       => 'Sohar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 23,
                'city_id'    => 23,
                'locale'     => 'en',
                'name'       => 'Barka',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 24,
                'city_id'    => 24,
                'locale'     => 'en',
                'name'       => 'Nizwa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 25,
                'city_id'    => 25,
                'locale'     => 'en',
                'name'       => 'Sur',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 26,
                'city_id'    => 26,
                'locale'     => 'en',
                'name'       => 'Buraimi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 27,
                'city_id'    => 27,
                'locale'     => 'en',
                'name'       => 'Ibri',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 28,
                'city_id'    => 28,
                'locale'     => 'en',
                'name'       => 'Amman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 29,
                'city_id'    => 29,
                'locale'     => 'en',
                'name'       => 'Aqaba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 30,
                'city_id'    => 30,
                'locale'     => 'en',
                'name'       => 'Irbid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 31,
                'city_id'    => 31,
                'locale'     => 'en',
                'name'       => 'Madaba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 32,
                'city_id'    => 32,
                'locale'     => 'en',
                'name'       => 'Madaba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 33,
                'city_id'    => 33,
                'locale'     => 'en',
                'name'       => 'Zarqa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 34,
                'city_id'    => 34,
                'locale'     => 'en',
                'name'       => 'Capital governate  ',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 35,
                'city_id'    => 35,
                'locale'     => 'en',
                'name'       => 'Muharraq governate',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 36,
                'city_id'    => 36,
                'locale'     => 'en',
                'name'       => 'Sothern governate ',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 37,
                'city_id'    => 37,
                'locale'     => 'en',
                'name'       => 'Northern governate',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 38,
                'city_id'    => 38,
                'locale'     => 'en',
                'name'       => 'Riyadh Province',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 39,
                'city_id'    => 39,
                'locale'     => 'en',
                'name'       => 'Makkah Province',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 40,
                'city_id'    => 40,
                'locale'     => 'en',
                'name'       => 'Madinah Province',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 41,
                'city_id'    => 41,
                'locale'     => 'en',
                'name'       => 'Qassim Province',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 42,
                'city_id'    => 42,
                'locale'     => 'en',
                'name'       => 'Eastern Province',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 43,
                'city_id'    => 43,
                'locale'     => 'en',
                'name'       => 'Asir Province',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 44,
                'city_id'    => 44,
                'locale'     => 'en',
                'name'       => 'Tabuk Province',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 45,
                'city_id'    => 45,
                'locale'     => 'en',
                'name'       => 'Hail Province',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 46,
                'city_id'    => 46,
                'locale'     => 'en',
                'name'       => 'Northern Borders',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 47,
                'city_id'    => 47,
                'locale'     => 'en',
                'name'       => 'Jizan Province',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 48,
                'city_id'    => 48,
                'locale'     => 'en',
                'name'       => 'Najran Province',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 49,
                'city_id'    => 49,
                'locale'     => 'en',
                'name'       => 'Bahah Province',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 50,
                'city_id'    => 50,
                'locale'     => 'en',
                'name'       => 'Jawf Province',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}