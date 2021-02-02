<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AreasTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area_translations')->insert([
            [
                'id'         => 1,
                'area_id'    => 1,
                'locale'     => 'en',
                'name'       => 'Abu Hail',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 2,
                'area_id'    => 2,
                'locale'     => 'en',
                'name'       => 'Academic City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 3,
                'area_id'    => 3,
                'locale'     => 'en',
                'name'       => 'Al Awir',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 4,
                'area_id'    => 4,
                'locale'     => 'en',
                'name'       => 'Al Bada\'a',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 5,
                'area_id'    => 5,
                'locale'     => 'en',
                'name'       => 'Al Baraha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 6,
                'area_id'    => 6,
                'locale'     => 'en',
                'name'       => 'Al Barari',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 7,
                'area_id'    => 7,
                'locale'     => 'en',
                'name'       => 'Al Barsha 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 8,
                'area_id'    => 8,
                'locale'     => 'en',
                'name'       => 'Al Barsha 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 9,
                'area_id'    => 9,
                'locale'     => 'en',
                'name'       => 'Al Barsha 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 10,
                'area_id'    => 10,
                'locale'     => 'en',
                'name'       => 'Al Barsha South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 11,
                'area_id'    => 11,
                'locale'     => 'en',
                'name'       => 'Al Buteen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 12,
                'area_id'    => 12,
                'locale'     => 'en',
                'name'       => 'Al Dhagaya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 13,
                'area_id'    => 13,
                'locale'     => 'en',
                'name'       => 'Al Furjan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 14,
                'area_id'    => 14,
                'locale'     => 'en',
                'name'       => 'Al Garhoud',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 15,
                'area_id'    => 15,
                'locale'     => 'en',
                'name'       => 'Al Hamriya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 16,
                'area_id'    => 16,
                'locale'     => 'en',
                'name'       => 'Al Hudaiba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 17,
                'area_id'    => 17,
                'locale'     => 'en',
                'name'       => 'Al Jaddaf',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 18,
                'area_id'    => 18,
                'locale'     => 'en',
                'name'       => 'Al Jaffiliya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 19,
                'area_id'    => 19,
                'locale'     => 'en',
                'name'       => 'Al Karama',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 20,
                'area_id'    => 20,
                'locale'     => 'en',
                'name'       => 'Al Khabaisi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 21,
                'area_id'    => 21,
                'locale'     => 'en',
                'name'       => 'Al Khawaneej 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 22,
                'area_id'    => 22,
                'locale'     => 'en',
                'name'       => 'Al Khawaneej 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 23,
                'area_id'    => 23,
                'locale'     => 'en',
                'name'       => 'Al Kifaf',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 24,
                'area_id'    => 24,
                'locale'     => 'en',
                'name'       => 'Al Mamzar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 25,
                'area_id'    => 25,
                'locale'     => 'en',
                'name'       => 'Al Manara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 26,
                'area_id'    => 26,
                'locale'     => 'en',
                'name'       => 'Al Mankhool',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 27,
                'area_id'    => 27,
                'locale'     => 'en',
                'name'       => 'Al Merkad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 28,
                'area_id'    => 28,
                'locale'     => 'en',
                'name'       => 'Al Mina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 29,
                'area_id'    => 29,
                'locale'     => 'en',
                'name'       => 'Al Mizhar 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 30,
                'area_id'    => 30,
                'locale'     => 'en',
                'name'       => 'Al Mizhar 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 31,
                'area_id'    => 31,
                'locale'     => 'en',
                'name'       => 'Al Muraqqabat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 32,
                'area_id'    => 32,
                'locale'     => 'en',
                'name'       => 'Al Murar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 33,
                'area_id'    => 33,
                'locale'     => 'en',
                'name'       => 'Al Mushrif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 34,
                'area_id'    => 34,
                'locale'     => 'en',
                'name'       => 'Al Muteena',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 35,
                'area_id'    => 35,
                'locale'     => 'en',
                'name'       => 'Al Nahda 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 36,
                'area_id'    => 36,
                'locale'     => 'en',
                'name'       => 'Al Nahda 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 37,
                'area_id'    => 37,
                'locale'     => 'en',
                'name'       => 'Al Quoz 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 38,
                'area_id'    => 38,
                'locale'     => 'en',
                'name'       => 'Al Quoz 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 39,
                'area_id'    => 39,
                'locale'     => 'en',
                'name'       => 'Al Quoz 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 40,
                'area_id'    => 40,
                'locale'     => 'en',
                'name'       => 'Al Quoz 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 41,
                'area_id'    => 41,
                'locale'     => 'en',
                'name'       => 'Al Quoz Industrial Area 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 42,
                'area_id'    => 42,
                'locale'     => 'en',
                'name'       => 'Al Quoz Industrial Area 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 43,
                'area_id'    => 43,
                'locale'     => 'en',
                'name'       => 'Al Quoz Industrial Area 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 44,
                'area_id'    => 44,
                'locale'     => 'en',
                'name'       => 'Al Quoz Industrial Area 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 45,
                'area_id'    => 45,
                'locale'     => 'en',
                'name'       => 'Al Qusais 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 46,
                'area_id'    => 46,
                'locale'     => 'en',
                'name'       => 'Al Qusais 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 47,
                'area_id'    => 47,
                'locale'     => 'en',
                'name'       => 'Al Qusais 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 48,
                'area_id'    => 48,
                'locale'     => 'en',
                'name'       => 'Al Qusais Industrial Area 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 49,
                'area_id'    => 49,
                'locale'     => 'en',
                'name'       => 'Al Qusais Industrial Area 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 50,
                'area_id'    => 50,
                'locale'     => 'en',
                'name'       => 'Al Qusais Industrial Area 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 51,
                'area_id'    => 51,
                'locale'     => 'en',
                'name'       => 'Al Qusais Industrial Area 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 52,
                'area_id'    => 52,
                'locale'     => 'en',
                'name'       => 'Al Qusais Industrial Area 5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 53,
                'area_id'    => 53,
                'locale'     => 'en',
                'name'       => 'Al Raffa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 54,
                'area_id'    => 54,
                'locale'     => 'en',
                'name'       => 'Al Ras',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 55,
                'area_id'    => 55,
                'locale'     => 'en',
                'name'       => 'Al Rashidiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 56,
                'area_id'    => 56,
                'locale'     => 'en',
                'name'       => 'Al Rigga',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 57,
                'area_id'    => 57,
                'locale'     => 'en',
                'name'       => 'Al Sabkha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 58,
                'area_id'    => 58,
                'locale'     => 'en',
                'name'       => 'Al Safa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 59,
                'area_id'    => 59,
                'locale'     => 'en',
                'name'       => 'Al Safa 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 60,
                'area_id'    => 60,
                'locale'     => 'en',
                'name'       => 'Al Satwa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 61,
                'area_id'    => 61,
                'locale'     => 'en',
                'name'       => 'Al Shindagha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 62,
                'area_id'    => 62,
                'locale'     => 'en',
                'name'       => 'Al Souq Al Kabeer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 63,
                'area_id'    => 63,
                'locale'     => 'en',
                'name'       => 'Al Sufouh 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 64,
                'area_id'    => 64,
                'locale'     => 'en',
                'name'       => 'Al Sufouh 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 65,
                'area_id'    => 65,
                'locale'     => 'en',
                'name'       => 'Al Twar 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 66,
                'area_id'    => 66,
                'locale'     => 'en',
                'name'       => 'Al Twar 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 67,
                'area_id'    => 67,
                'locale'     => 'en',
                'name'       => 'Al Twar 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 68,
                'area_id'    => 68,
                'locale'     => 'en',
                'name'       => 'Al Waheda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 69,
                'area_id'    => 69,
                'locale'     => 'en',
                'name'       => 'Al Warqa 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 70,
                'area_id'    => 70,
                'locale'     => 'en',
                'name'       => 'Al Warqa 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 71,
                'area_id'    => 71,
                'locale'     => 'en',
                'name'       => 'Al Warqa 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 72,
                'area_id'    => 72,
                'locale'     => 'en',
                'name'       => 'Al Warqa 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 73,
                'area_id'    => 73,
                'locale'     => 'en',
                'name'       => 'Al Warqa 5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 74,
                'area_id'    => 74,
                'locale'     => 'en',
                'name'       => 'Al Wasl',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 75,
                'area_id'    => 75,
                'locale'     => 'en',
                'name'       => 'Arabian Ranches',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 76,
                'area_id'    => 76,
                'locale'     => 'en',
                'name'       => 'Arabian Ranches 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 77,
                'area_id'    => 77,
                'locale'     => 'en',
                'name'       => 'Barsha Heights - TECOM',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 78,
                'area_id'    => 78,
                'locale'     => 'en',
                'name'       => 'Bukadra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 79,
                'area_id'    => 79,
                'locale'     => 'en',
                'name'       => 'Business Bay',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 80,
                'area_id'    => 80,
                'locale'     => 'en',
                'name'       => 'Corniche Deira',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 81,
                'area_id'    => 81,
                'locale'     => 'en',
                'name'       => 'DIFC',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 82,
                'area_id'    => 82,
                'locale'     => 'en',
                'name'       => 'Discovery Gardens',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 83,
                'area_id'    => 83,
                'locale'     => 'en',
                'name'       => 'Downtown Burj Khalifa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 84,
                'area_id'    => 84,
                'locale'     => 'en',
                'name'       => 'Downtown Jabel Ali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 85,
                'area_id'    => 85,
                'locale'     => 'en',
                'name'       => 'Dubai Airport Freezone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 86,
                'area_id'    => 86,
                'locale'     => 'en',
                'name'       => 'Dubai Cargo Village',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 87,
                'area_id'    => 87,
                'locale'     => 'en',
                'name'       => 'Dubai Design District',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 88,
                'area_id'    => 88,
                'locale'     => 'en',
                'name'       => 'Dubai Falcon City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 89,
                'area_id'    => 89,
                'locale'     => 'en',
                'name'       => 'Dubai Festival City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 90,
                'area_id'    => 90,
                'locale'     => 'en',
                'name'       => 'Dubai Healthcare City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 91,
                'area_id'    => 91,
                'locale'     => 'en',
                'name'       => 'Dubai International Airport',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 92,
                'area_id'    => 92,
                'locale'     => 'en',
                'name'       => 'Dubai Internet City - DIC',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 93,
                'area_id'    => 93,
                'locale'     => 'en',
                'name'       => 'Dubai Investments Park 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 94,
                'area_id'    => 94,
                'locale'     => 'en',
                'name'       => 'Dubai Investments Park 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 95,
                'area_id'    => 95,
                'locale'     => 'en',
                'name'       => 'Dubai Marina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 96,
                'area_id'    => 96,
                'locale'     => 'en',
                'name'       => 'Dubai Maritime City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 97,
                'area_id'    => 97,
                'locale'     => 'en',
                'name'       => 'Dubai Media City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 98,
                'area_id'    => 98,
                'locale'     => 'en',
                'name'       => 'Dubai Motor City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 99,
                'area_id'    => 99,
                'locale'     => 'en',
                'name'       => 'Dubai Silicon Oasis',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 100,
                'area_id'    => 100,
                'locale'     => 'en',
                'name'       => 'Dubai Sports City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 101,
                'area_id'    => 101,
                'locale'     => 'en',
                'name'       => 'Dubai Studio City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 102,
                'area_id'    => 102,
                'locale'     => 'en',
                'name'       => 'Dubai Techno Park',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 103,
                'area_id'    => 103,
                'locale'     => 'en',
                'name'       => 'Dubai World Central - DWC',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 104,
                'area_id'    => 104,
                'locale'     => 'en',
                'name'       => 'Dubai World Trade Center - DWTC',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 105,
                'area_id'    => 105,
                'locale'     => 'en',
                'name'       => 'Emirates Hills',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 106,
                'area_id'    => 106,
                'locale'     => 'en',
                'name'       => 'Gardens',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 107,
                'area_id'    => 107,
                'locale'     => 'en',
                'name'       => 'Global Village',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 108,
                'area_id'    => 108,
                'locale'     => 'en',
                'name'       => 'Green Community Motor City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 109,
                'area_id'    => 109,
                'locale'     => 'en',
                'name'       => 'Hor Al Anz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 110,
                'area_id'    => 110,
                'locale'     => 'en',
                'name'       => 'Hor Al Anz East',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 111,
                'area_id'    => 111,
                'locale'     => 'en',
                'name'       => 'Ibn Batutta Mall',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 112,
                'area_id'    => 112,
                'locale'     => 'en',
                'name'       => 'IMPZ',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 113,
                'area_id'    => 113,
                'locale'     => 'en',
                'name'       => 'International City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 114,
                'area_id'    => 114,
                'locale'     => 'en',
                'name'       => 'Jebel Ali 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 115,
                'area_id'    => 115,
                'locale'     => 'en',
                'name'       => 'Jebel Ali 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 116,
                'area_id'    => 116,
                'locale'     => 'en',
                'name'       => 'Jebel Ali Freezone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 117,
                'area_id'    => 117,
                'locale'     => 'en',
                'name'       => 'Jebel Ali Freezone Extension',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 118,
                'area_id'    => 118,
                'locale'     => 'en',
                'name'       => 'Jebel Ali Industrial Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 119,
                'area_id'    => 119,
                'locale'     => 'en',
                'name'       => 'Jumeirah 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 120,
                'area_id'    => 120,
                'locale'     => 'en',
                'name'       => 'Jumeirah 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 121,
                'area_id'    => 121,
                'locale'     => 'en',
                'name'       => 'Jumeirah 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 122,
                'area_id'    => 122,
                'locale'     => 'en',
                'name'       => 'Jumeirah Beach Residence - JBR',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 123,
                'area_id'    => 123,
                'locale'     => 'en',
                'name'       => 'Jumeirah Golf Estates',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 124,
                'area_id'    => 124,
                'locale'     => 'en',
                'name'       => 'Jumeirah Islands',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 125,
                'area_id'    => 125,
                'locale'     => 'en',
                'name'       => 'Jumeirah Lakes Towers - JLT',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 126,
                'area_id'    => 126,
                'locale'     => 'en',
                'name'       => 'Jumeirah Park',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 127,
                'area_id'    => 127,
                'locale'     => 'en',
                'name'       => 'Jumeirah Village Circle - JVC',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 128,
                'area_id'    => 128,
                'locale'     => 'en',
                'name'       => 'Jumeirah Village Triangle - JVT',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 129,
                'area_id'    => 129,
                'locale'     => 'en',
                'name'       => 'Knowledge Village',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 130,
                'area_id'    => 130,
                'locale'     => 'en',
                'name'       => 'Layan Community',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 131,
                'area_id'    => 131,
                'locale'     => 'en',
                'name'       => 'Liwan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 132,
                'area_id'    => 132,
                'locale'     => 'en',
                'name'       => 'Meadows',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 133,
                'area_id'    => 133,
                'locale'     => 'en',
                'name'       => 'Meydan South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 134,
                'area_id'    => 134,
                'locale'     => 'en',
                'name'       => 'Mira Community',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 135,
                'area_id'    => 135,
                'locale'     => 'en',
                'name'       => 'Mirdif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 136,
                'area_id'    => 136,
                'locale'     => 'en',
                'name'       => 'Mudon',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 137,
                'area_id'    => 137,
                'locale'     => 'en',
                'name'       => 'Muhaisnah 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 138,
                'area_id'    => 138,
                'locale'     => 'en',
                'name'       => 'Muhaisnah 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 139,
                'area_id'    => 139,
                'locale'     => 'en',
                'name'       => 'Muhaisnah 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 140,
                'area_id'    => 140,
                'locale'     => 'en',
                'name'       => 'Muhaisnah 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 141,
                'area_id'    => 141,
                'locale'     => 'en',
                'name'       => 'Nad Al Sheba 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 142,
                'area_id'    => 142,
                'locale'     => 'en',
                'name'       => 'Nad Al Sheba 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 143,
                'area_id'    => 143,
                'locale'     => 'en',
                'name'       => 'Nad Al Sheba 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 144,
                'area_id'    => 144,
                'locale'     => 'en',
                'name'       => 'Nad Al Sheba 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 145,
                'area_id'    => 145,
                'locale'     => 'en',
                'name'       => 'Nadd Al Hamar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 146,
                'area_id'    => 146,
                'locale'     => 'en',
                'name'       => 'Nadd Al Shamma',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 147,
                'area_id'    => 147,
                'locale'     => 'en',
                'name'       => 'Naif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 148,
                'area_id'    => 148,
                'locale'     => 'en',
                'name'       => 'Oud Al Muteena',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 149,
                'area_id'    => 149,
                'locale'     => 'en',
                'name'       => 'Oud Metha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 150,
                'area_id'    => 150,
                'locale'     => 'en',
                'name'       => 'Port Rashid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 151,
                'area_id'    => 151,
                'locale'     => 'en',
                'name'       => 'Port Saeed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 152,
                'area_id'    => 152,
                'locale'     => 'en',
                'name'       => 'Ras Al Khor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 153,
                'area_id'    => 153,
                'locale'     => 'en',
                'name'       => 'Ras Al Khor Indsutrial Area 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 154,
                'area_id'    => 154,
                'locale'     => 'en',
                'name'       => 'Ras Al Khor Indsutrial Area 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 155,
                'area_id'    => 155,
                'locale'     => 'en',
                'name'       => 'Ras Al Khor Indsutrial Area 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 156,
                'area_id'    => 156,
                'locale'     => 'en',
                'name'       => 'Remraam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 157,
                'area_id'    => 157,
                'locale'     => 'en',
                'name'       => 'Rigga Al Buteen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 158,
                'area_id'    => 158,
                'locale'     => 'en',
                'name'       => 'Springs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 159,
                'area_id'    => 159,
                'locale'     => 'en',
                'name'       => 'The Greens',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 160,
                'area_id'    => 160,
                'locale'     => 'en',
                'name'       => 'The Lakes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 161,
                'area_id'    => 161,
                'locale'     => 'en',
                'name'       => 'The Palm Deira',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 162,
                'area_id'    => 162,
                'locale'     => 'en',
                'name'       => 'The Palm Jebel Ali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 163,
                'area_id'    => 163,
                'locale'     => 'en',
                'name'       => 'The Palm Jumeirah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 164,
                'area_id'    => 164,
                'locale'     => 'en',
                'name'       => 'The Skycourts',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 165,
                'area_id'    => 165,
                'locale'     => 'en',
                'name'       => 'The Sustainable City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 166,
                'area_id'    => 166,
                'locale'     => 'en',
                'name'       => 'The Villa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 167,
                'area_id'    => 167,
                'locale'     => 'en',
                'name'       => 'Um Al Sheif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 168,
                'area_id'    => 168,
                'locale'     => 'en',
                'name'       => 'Umm Hurair 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 169,
                'area_id'    => 169,
                'locale'     => 'en',
                'name'       => 'Umm Hurair 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 170,
                'area_id'    => 170,
                'locale'     => 'en',
                'name'       => 'Umm Ramool',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 171,
                'area_id'    => 171,
                'locale'     => 'en',
                'name'       => 'Umm Suqeim 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 172,
                'area_id'    => 172,
                'locale'     => 'en',
                'name'       => 'Umm Suqeim 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 173,
                'area_id'    => 173,
                'locale'     => 'en',
                'name'       => 'Umm Suqeim 2 Beach',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 174,
                'area_id'    => 174,
                'locale'     => 'en',
                'name'       => 'Umm Suqeim 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 175,
                'area_id'    => 175,
                'locale'     => 'en',
                'name'       => 'Wadi Alamardi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 176,
                'area_id'    => 176,
                'locale'     => 'en',
                'name'       => 'Warsan 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 177,
                'area_id'    => 177,
                'locale'     => 'en',
                'name'       => 'Warsan 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 178,
                'area_id'    => 178,
                'locale'     => 'en',
                'name'       => 'Waterfront',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 179,
                'area_id'    => 179,
                'locale'     => 'en',
                'name'       => 'Za\'abeel 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 180,
                'area_id'    => 180,
                'locale'     => 'en',
                'name'       => 'Za\'abeel 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 181,
                'area_id'    => 181,
                'locale'     => 'en',
                'name'       => 'Al Adla',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 182,
                'area_id'    => 182,
                'locale'     => 'en',
                'name'       => 'Al Aman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 183,
                'area_id'    => 183,
                'locale'     => 'en',
                'name'       => 'Al Bahya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 184,
                'area_id'    => 184,
                'locale'     => 'en',
                'name'       => 'Al Bandar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 185,
                'area_id'    => 185,
                'locale'     => 'en',
                'name'       => 'Al Dafrah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 186,
                'area_id'    => 186,
                'locale'     => 'en',
                'name'       => 'Al Etihad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 187,
                'area_id'    => 187,
                'locale'     => 'en',
                'name'       => 'Al Falah City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 188,
                'area_id'    => 188,
                'locale'     => 'en',
                'name'       => 'Al Hosn',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 189,
                'area_id'    => 189,
                'locale'     => 'en',
                'name'       => 'Al Karamah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 190,
                'area_id'    => 190,
                'locale'     => 'en',
                'name'       => 'Al Khalidiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 191,
                'area_id'    => 191,
                'locale'     => 'en',
                'name'       => 'Al Khubeirah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 192,
                'area_id'    => 192,
                'locale'     => 'en',
                'name'       => 'Al Mafraq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 193,
                'area_id'    => 193,
                'locale'     => 'en',
                'name'       => 'Al Manhal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 194,
                'area_id'    => 194,
                'locale'     => 'en',
                'name'       => 'Al Maqta',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 195,
                'area_id'    => 195,
                'locale'     => 'en',
                'name'       => 'Al Markaziyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 196,
                'area_id'    => 196,
                'locale'     => 'en',
                'name'       => 'Al Markaziyah West',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 197,
                'area_id'    => 197,
                'locale'     => 'en',
                'name'       => 'Al Maryah Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 198,
                'area_id'    => 198,
                'locale'     => 'en',
                'name'       => 'Al Mina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 199,
                'area_id'    => 199,
                'locale'     => 'en',
                'name'       => 'Al Muneera',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 200,
                'area_id'    => 200,
                'locale'     => 'en',
                'name'       => 'Al Muntazah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 201,
                'area_id'    => 201,
                'locale'     => 'en',
                'name'       => 'Al Musalla',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 202,
                'area_id'    => 202,
                'locale'     => 'en',
                'name'       => 'Al Mushrif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 203,
                'area_id'    => 203,
                'locale'     => 'en',
                'name'       => 'Al Muzoon',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 204,
                'area_id'    => 204,
                'locale'     => 'en',
                'name'       => 'Al Nahyan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 205,
                'area_id'    => 205,
                'locale'     => 'en',
                'name'       => 'Al Raha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 206,
                'area_id'    => 206,
                'locale'     => 'en',
                'name'       => 'Al Rahba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 207,
                'area_id'    => 207,
                'locale'     => 'en',
                'name'       => 'Al Ras Al Akhdar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 208,
                'area_id'    => 208,
                'locale'     => 'en',
                'name'       => 'Al Reef',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 209,
                'area_id'    => 209,
                'locale'     => 'en',
                'name'       => 'Al Rowdah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 210,
                'area_id'    => 210,
                'locale'     => 'en',
                'name'       => 'Al Safarrat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 211,
                'area_id'    => 211,
                'locale'     => 'en',
                'name'       => 'Al Samha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 212,
                'area_id'    => 212,
                'locale'     => 'en',
                'name'       => 'Al Shamkha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 213,
                'area_id'    => 213,
                'locale'     => 'en',
                'name'       => 'Al Shawamekh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 214,
                'area_id'    => 214,
                'locale'     => 'en',
                'name'       => 'Al Wahdah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 215,
                'area_id'    => 215,
                'locale'     => 'en',
                'name'       => 'Al Wathba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 216,
                'area_id'    => 216,
                'locale'     => 'en',
                'name'       => 'Al Zaab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 217,
                'area_id'    => 217,
                'locale'     => 'en',
                'name'       => 'Al Zafranah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 218,
                'area_id'    => 218,
                'locale'     => 'en',
                'name'       => 'Al Zahraa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 219,
                'area_id'    => 219,
                'locale'     => 'en',
                'name'       => 'Al Zeina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 220,
                'area_id'    => 220,
                'locale'     => 'en',
                'name'       => 'Bain Al Jesrain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 221,
                'area_id'    => 221,
                'locale'     => 'en',
                'name'       => 'Bani Yas',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 222,
                'area_id'    => 222,
                'locale'     => 'en',
                'name'       => 'Belghailam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 223,
                'area_id'    => 223,
                'locale'     => 'en',
                'name'       => 'BreakWater',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 224,
                'area_id'    => 224,
                'locale'     => 'en',
                'name'       => 'Capital Centre',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 225,
                'area_id'    => 225,
                'locale'     => 'en',
                'name'       => 'Dhow Harbour',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 226,
                'area_id'    => 226,
                'locale'     => 'en',
                'name'       => 'Hydra City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 227,
                'area_id'    => 227,
                'locale'     => 'en',
                'name'       => 'Khor Al Bateen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 228,
                'area_id'    => 228,
                'locale'     => 'en',
                'name'       => 'Lulu Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 229,
                'area_id'    => 229,
                'locale'     => 'en',
                'name'       => 'Madinat Khalifa - A',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 230,
                'area_id'    => 230,
                'locale'     => 'en',
                'name'       => 'Madinat Khalifa - B',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 231,
                'area_id'    => 231,
                'locale'     => 'en',
                'name'       => 'Madinat Khalifa - C',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 232,
                'area_id'    => 232,
                'locale'     => 'en',
                'name'       => 'Madinat Zayed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 233,
                'area_id'    => 233,
                'locale'     => 'en',
                'name'       => 'Masdar City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 234,
                'area_id'    => 234,
                'locale'     => 'en',
                'name'       => 'Mohammed Bin Zayed City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 235,
                'area_id'    => 235,
                'locale'     => 'en',
                'name'       => 'Mussafah Industrial city',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 236,
                'area_id'    => 236,
                'locale'     => 'en',
                'name'       => 'New Shahama',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 237,
                'area_id'    => 237,
                'locale'     => 'en',
                'name'       => 'Port Zayed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 238,
                'area_id'    => 238,
                'locale'     => 'en',
                'name'       => 'Qasr El Bahr',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 239,
                'area_id'    => 239,
                'locale'     => 'en',
                'name'       => 'Qasr El Shantie',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 240,
                'area_id'    => 240,
                'locale'     => 'en',
                'name'       => 'Reem Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 241,
                'area_id'    => 241,
                'locale'     => 'en',
                'name'       => 'Saadiyat Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 242,
                'area_id'    => 242,
                'locale'     => 'en',
                'name'       => 'Sas Al Nakhl Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 243,
                'area_id'    => 243,
                'locale'     => 'en',
                'name'       => 'Shahama',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 244,
                'area_id'    => 244,
                'locale'     => 'en',
                'name'       => 'Tourist Club Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 245,
                'area_id'    => 245,
                'locale'     => 'en',
                'name'       => 'Yas Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 246,
                'area_id'    => 246,
                'locale'     => 'en',
                'name'       => 'Zayed Sports City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 247,
                'area_id'    => 247,
                'locale'     => 'en',
                'name'       => 'Abu Shagara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 248,
                'area_id'    => 248,
                'locale'     => 'en',
                'name'       => 'Al Muntazah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 249,
                'area_id'    => 249,
                'locale'     => 'en',
                'name'       => 'Al Abar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 250,
                'area_id'    => 250,
                'locale'     => 'en',
                'name'       => 'Al Azra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 251,
                'area_id'    => 251,
                'locale'     => 'en',
                'name'       => 'Al Bataeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 252,
                'area_id'    => 252,
                'locale'     => 'en',
                'name'       => 'Al Darari',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 253,
                'area_id'    => 253,
                'locale'     => 'en',
                'name'       => 'Al Dhaid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 254,
                'area_id'    => 254,
                'locale'     => 'en',
                'name'       => 'Al Elyash',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 255,
                'area_id'    => 255,
                'locale'     => 'en',
                'name'       => 'Al Falaj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 256,
                'area_id'    => 256,
                'locale'     => 'en',
                'name'       => 'Al Fayha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 257,
                'area_id'    => 257,
                'locale'     => 'en',
                'name'       => 'Al Fisht',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 258,
                'area_id'    => 258,
                'locale'     => 'en',
                'name'       => 'Al Ghaphia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 259,
                'area_id'    => 259,
                'locale'     => 'en',
                'name'       => 'Al Gharayen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 260,
                'area_id'    => 260,
                'locale'     => 'en',
                'name'       => 'Al Ghubaiba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 261,
                'area_id'    => 261,
                'locale'     => 'en',
                'name'       => 'Al Ghuwair',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 262,
                'area_id'    => 262,
                'locale'     => 'en',
                'name'       => 'Al Goaz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 263,
                'area_id'    => 263,
                'locale'     => 'en',
                'name'       => 'Al Hazana',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 264,
                'area_id'    => 264,
                'locale'     => 'en',
                'name'       => 'Al Homaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 265,
                'area_id'    => 265,
                'locale'     => 'en',
                'name'       => 'Al Jazzat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 266,
                'area_id'    => 266,
                'locale'     => 'en',
                'name'       => 'Al Jubail',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 267,
                'area_id'    => 267,
                'locale'     => 'en',
                'name'       => 'Al Juraina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 268,
                'area_id'    => 268,
                'locale'     => 'en',
                'name'       => 'Al Khaledia Suburb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 269,
                'area_id'    => 269,
                'locale'     => 'en',
                'name'       => 'Al Khan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 270,
                'area_id'    => 270,
                'locale'     => 'en',
                'name'       => 'Al Khezamia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 271,
                'area_id'    => 271,
                'locale'     => 'en',
                'name'       => 'Al Layyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 272,
                'area_id'    => 272,
                'locale'     => 'en',
                'name'       => 'Al Mahatta',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 273,
                'area_id'    => 273,
                'locale'     => 'en',
                'name'       => 'Al Majaz 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 274,
                'area_id'    => 274,
                'locale'     => 'en',
                'name'       => 'Al Majaz 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 275,
                'area_id'    => 275,
                'locale'     => 'en',
                'name'       => 'Al Majaz 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 276,
                'area_id'    => 276,
                'locale'     => 'en',
                'name'       => 'Al Mamzar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 277,
                'area_id'    => 277,
                'locale'     => 'en',
                'name'       => 'Al Manakh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 278,
                'area_id'    => 278,
                'locale'     => 'en',
                'name'       => 'Al Mansura',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 279,
                'area_id'    => 279,
                'locale'     => 'en',
                'name'       => 'Al Mareija',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 280,
                'area_id'    => 280,
                'locale'     => 'en',
                'name'       => 'Al Mirgab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 281,
                'area_id'    => 281,
                'locale'     => 'en',
                'name'       => 'Al Mujarah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 282,
                'area_id'    => 282,
                'locale'     => 'en',
                'name'       => 'Al Musalla',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 283,
                'area_id'    => 283,
                'locale'     => 'en',
                'name'       => 'Al Nabba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 284,
                'area_id'    => 284,
                'locale'     => 'en',
                'name'       => 'Al Nad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 285,
                'area_id'    => 285,
                'locale'     => 'en',
                'name'       => 'Al Nahda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 286,
                'area_id'    => 286,
                'locale'     => 'en',
                'name'       => 'Al Nasserya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 287,
                'area_id'    => 287,
                'locale'     => 'en',
                'name'       => 'Al Nekhailat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 288,
                'area_id'    => 288,
                'locale'     => 'en',
                'name'       => 'Al Noof',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 289,
                'area_id'    => 289,
                'locale'     => 'en',
                'name'       => 'Al Qadisia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 290,
                'area_id'    => 290,
                'locale'     => 'en',
                'name'       => 'Al Qasimia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 291,
                'area_id'    => 291,
                'locale'     => 'en',
                'name'       => 'Al Qulayaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 292,
                'area_id'    => 292,
                'locale'     => 'en',
                'name'       => 'Al Rahmania',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 293,
                'area_id'    => 293,
                'locale'     => 'en',
                'name'       => 'Al Ramaqia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 294,
                'area_id'    => 294,
                'locale'     => 'en',
                'name'       => 'Al Ramla East',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 295,
                'area_id'    => 295,
                'locale'     => 'en',
                'name'       => 'Al Ramla West',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 296,
                'area_id'    => 296,
                'locale'     => 'en',
                'name'       => 'Al Ramtha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 297,
                'area_id'    => 297,
                'locale'     => 'en',
                'name'       => 'Al Rifah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 298,
                'area_id'    => 298,
                'locale'     => 'en',
                'name'       => 'Al Riffa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 299,
                'area_id'    => 299,
                'locale'     => 'en',
                'name'       => 'Al Sabkha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 300,
                'area_id'    => 300,
                'locale'     => 'en',
                'name'       => 'Al Seef',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 301,
                'area_id'    => 301,
                'locale'     => 'en',
                'name'       => 'Al Shahba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 302,
                'area_id'    => 302,
                'locale'     => 'en',
                'name'       => 'Al Shuwaihen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 303,
                'area_id'    => 303,
                'locale'     => 'en',
                'name'       => 'Al Soor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 304,
                'area_id'    => 304,
                'locale'     => 'en',
                'name'       => 'Al Sweihat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 305,
                'area_id'    => 305,
                'locale'     => 'en',
                'name'       => 'Al Taawun',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 306,
                'area_id'    => 306,
                'locale'     => 'en',
                'name'       => 'Al Talaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 307,
                'area_id'    => 307,
                'locale'     => 'en',
                'name'       => 'Al Tarfa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 308,
                'area_id'    => 308,
                'locale'     => 'en',
                'name'       => 'Al Yarmook',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 309,
                'area_id'    => 309,
                'locale'     => 'en',
                'name'       => 'Bu Danig',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 310,
                'area_id'    => 310,
                'locale'     => 'en',
                'name'       => 'Bu Tina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 311,
                'area_id'    => 311,
                'locale'     => 'en',
                'name'       => 'Dasman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 312,
                'area_id'    => 312,
                'locale'     => 'en',
                'name'       => 'Industrial Area 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 313,
                'area_id'    => 313,
                'locale'     => 'en',
                'name'       => 'Industrial Area 10',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 314,
                'area_id'    => 314,
                'locale'     => 'en',
                'name'       => 'Industrial Area 11',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 315,
                'area_id'    => 315,
                'locale'     => 'en',
                'name'       => 'Industrial Area 12',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 316,
                'area_id'    => 316,
                'locale'     => 'en',
                'name'       => 'Industrial Area 13',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 317,
                'area_id'    => 317,
                'locale'     => 'en',
                'name'       => 'Industrial Area 15',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 318,
                'area_id'    => 318,
                'locale'     => 'en',
                'name'       => 'Industrial Area 17',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 319,
                'area_id'    => 319,
                'locale'     => 'en',
                'name'       => 'Industrial Area 18',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 320,
                'area_id'    => 320,
                'locale'     => 'en',
                'name'       => 'Industrial Area 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 321,
                'area_id'    => 321,
                'locale'     => 'en',
                'name'       => 'Industrial Area 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 322,
                'area_id'    => 322,
                'locale'     => 'en',
                'name'       => 'Industrial Area 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 323,
                'area_id'    => 323,
                'locale'     => 'en',
                'name'       => 'Industrial Area 5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 324,
                'area_id'    => 324,
                'locale'     => 'en',
                'name'       => 'Industrial Area 6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 325,
                'area_id'    => 325,
                'locale'     => 'en',
                'name'       => 'Industrial Area 7',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 326,
                'area_id'    => 326,
                'locale'     => 'en',
                'name'       => 'Industrial Area 8',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 327,
                'area_id'    => 327,
                'locale'     => 'en',
                'name'       => 'Industrial Area 9',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 328,
                'area_id'    => 328,
                'locale'     => 'en',
                'name'       => 'Khor Fakkan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 329,
                'area_id'    => 329,
                'locale'     => 'en',
                'name'       => 'Maysaloon',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 330,
                'area_id'    => 330,
                'locale'     => 'en',
                'name'       => 'Muwafjah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 331,
                'area_id'    => 331,
                'locale'     => 'en',
                'name'       => 'Muwaileh Commercial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 332,
                'area_id'    => 332,
                'locale'     => 'en',
                'name'       => 'Rolla',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 333,
                'area_id'    => 333,
                'locale'     => 'en',
                'name'       => 'Saif Zone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 334,
                'area_id'    => 334,
                'locale'     => 'en',
                'name'       => 'Samnan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 335,
                'area_id'    => 335,
                'locale'     => 'en',
                'name'       => 'Sharqan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 336,
                'area_id'    => 336,
                'locale'     => 'en',
                'name'       => 'Um Altaraffa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 337,
                'area_id'    => 337,
                'locale'     => 'en',
                'name'       => 'University of Sharjah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 344,
                'area_id'    => 344,
                'locale'     => 'en',
                'name'       => 'Ajman City Center',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 345,
                'area_id'    => 345,
                'locale'     => 'en',
                'name'       => 'Ajman Corniche',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 346,
                'area_id'    => 346,
                'locale'     => 'en',
                'name'       => 'Ajman Free Zone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 347,
                'area_id'    => 347,
                'locale'     => 'en',
                'name'       => 'Ajman Pearl',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 348,
                'area_id'    => 348,
                'locale'     => 'en',
                'name'       => 'Ajman University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 349,
                'area_id'    => 349,
                'locale'     => 'en',
                'name'       => 'Al Bustan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 350,
                'area_id'    => 350,
                'locale'     => 'en',
                'name'       => 'Al Butain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 351,
                'area_id'    => 351,
                'locale'     => 'en',
                'name'       => 'Al Hamidiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 352,
                'area_id'    => 352,
                'locale'     => 'en',
                'name'       => 'Al Helio',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 353,
                'area_id'    => 353,
                'locale'     => 'en',
                'name'       => 'Al Jurf 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 354,
                'area_id'    => 354,
                'locale'     => 'en',
                'name'       => 'Al Jurf 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 355,
                'area_id'    => 355,
                'locale'     => 'en',
                'name'       => 'Al Mushairef',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 356,
                'area_id'    => 356,
                'locale'     => 'en',
                'name'       => 'Al Nakhil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 357,
                'area_id'    => 357,
                'locale'     => 'en',
                'name'       => 'Al Nakhil 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 358,
                'area_id'    => 358,
                'locale'     => 'en',
                'name'       => 'Al Nakhil 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 359,
                'area_id'    => 359,
                'locale'     => 'en',
                'name'       => 'Al Nuaimia 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 360,
                'area_id'    => 360,
                'locale'     => 'en',
                'name'       => 'Al Nuaimia 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 361,
                'area_id'    => 361,
                'locale'     => 'en',
                'name'       => 'Al Rashidiya 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 362,
                'area_id'    => 362,
                'locale'     => 'en',
                'name'       => 'Al Rashidiya 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 363,
                'area_id'    => 363,
                'locale'     => 'en',
                'name'       => 'Al Rashidiya 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 364,
                'area_id'    => 364,
                'locale'     => 'en',
                'name'       => 'Al Rumailah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 365,
                'area_id'    => 365,
                'locale'     => 'en',
                'name'       => 'Al Zahra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 366,
                'area_id'    => 366,
                'locale'     => 'en',
                'name'       => 'Al Zawarah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 367,
                'area_id'    => 367,
                'locale'     => 'en',
                'name'       => 'Al Zora',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 368,
                'area_id'    => 368,
                'locale'     => 'en',
                'name'       => 'Emirates City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 369,
                'area_id'    => 369,
                'locale'     => 'en',
                'name'       => 'Emirates City Extension',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 370,
                'area_id'    => 370,
                'locale'     => 'en',
                'name'       => 'Garden City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 371,
                'area_id'    => 371,
                'locale'     => 'en',
                'name'       => 'Ittihad Village',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 372,
                'area_id'    => 372,
                'locale'     => 'en',
                'name'       => 'Masfout',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 373,
                'area_id'    => 373,
                'locale'     => 'en',
                'name'       => 'Abu Samrah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 374,
                'area_id'    => 374,
                'locale'     => 'en',
                'name'       => 'Al Agabiyya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 375,
                'area_id'    => 375,
                'locale'     => 'en',
                'name'       => 'Al Ain International Airport',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 376,
                'area_id'    => 376,
                'locale'     => 'en',
                'name'       => 'Al Ain Mall',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 377,
                'area_id'    => 377,
                'locale'     => 'en',
                'name'       => 'Al Ain Oasis Villas',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 378,
                'area_id'    => 378,
                'locale'     => 'en',
                'name'       => 'Al Bateen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 379,
                'area_id'    => 379,
                'locale'     => 'en',
                'name'       => 'Al Foaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 380,
                'area_id'    => 380,
                'locale'     => 'en',
                'name'       => 'Al Hili',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 381,
                'area_id'    => 381,
                'locale'     => 'en',
                'name'       => 'Al Jahili',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 382,
                'area_id'    => 382,
                'locale'     => 'en',
                'name'       => 'Al Jimi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 383,
                'area_id'    => 383,
                'locale'     => 'en',
                'name'       => 'Al Khabisi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 384,
                'area_id'    => 384,
                'locale'     => 'en',
                'name'       => 'Al Maqam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 385,
                'area_id'    => 385,
                'locale'     => 'en',
                'name'       => 'Al Marakhaniya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 386,
                'area_id'    => 386,
                'locale'     => 'en',
                'name'       => 'Al Masoudi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 387,
                'area_id'    => 387,
                'locale'     => 'en',
                'name'       => 'Al Murabaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 388,
                'area_id'    => 388,
                'locale'     => 'en',
                'name'       => 'Al Mutarad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 389,
                'area_id'    => 389,
                'locale'     => 'en',
                'name'       => 'Al Mutawaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 390,
                'area_id'    => 390,
                'locale'     => 'en',
                'name'       => 'Al Qattara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 391,
                'area_id'    => 391,
                'locale'     => 'en',
                'name'       => 'Al Sarooj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 392,
                'area_id'    => 392,
                'locale'     => 'en',
                'name'       => 'Al Shabiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 393,
                'area_id'    => 393,
                'locale'     => 'en',
                'name'       => 'Al Towayya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 394,
                'area_id'    => 394,
                'locale'     => 'en',
                'name'       => 'Al Yahar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 395,
                'area_id'    => 395,
                'locale'     => 'en',
                'name'       => 'Al Zakher',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 396,
                'area_id'    => 396,
                'locale'     => 'en',
                'name'       => 'Alain Al Fiyada',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 397,
                'area_id'    => 397,
                'locale'     => 'en',
                'name'       => 'Asharej',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 398,
                'area_id'    => 398,
                'locale'     => 'en',
                'name'       => 'Bedda Bn Ammar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 399,
                'area_id'    => 399,
                'locale'     => 'en',
                'name'       => 'Falaj Hazzaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 400,
                'area_id'    => 400,
                'locale'     => 'en',
                'name'       => 'Industrial Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 401,
                'area_id'    => 401,
                'locale'     => 'en',
                'name'       => 'Manazaf',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 402,
                'area_id'    => 402,
                'locale'     => 'en',
                'name'       => 'Mubzara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 403,
                'area_id'    => 403,
                'locale'     => 'en',
                'name'       => 'Neima',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 404,
                'area_id'    => 404,
                'locale'     => 'en',
                'name'       => 'Tawam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 405,
                'area_id'    => 405,
                'locale'     => 'en',
                'name'       => 'UAE University 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 406,
                'area_id'    => 406,
                'locale'     => 'en',
                'name'       => 'UAE University 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 407,
                'area_id'    => 407,
                'locale'     => 'en',
                'name'       => 'Al Bedia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 408,
                'area_id'    => 408,
                'locale'     => 'en',
                'name'       => 'Al Buthna',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 409,
                'area_id'    => 409,
                'locale'     => 'en',
                'name'       => 'Al Farfar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 410,
                'area_id'    => 410,
                'locale'     => 'en',
                'name'       => 'Al Faseel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 411,
                'area_id'    => 411,
                'locale'     => 'en',
                'name'       => 'Al Gurfa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 412,
                'area_id'    => 412,
                'locale'     => 'en',
                'name'       => 'Al Hala',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 413,
                'area_id'    => 413,
                'locale'     => 'en',
                'name'       => 'Al Heel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 414,
                'area_id'    => 414,
                'locale'     => 'en',
                'name'       => 'Al Ittihad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 415,
                'area_id'    => 415,
                'locale'     => 'en',
                'name'       => 'Al Mahatta',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 416,
                'area_id'    => 416,
                'locale'     => 'en',
                'name'       => 'Al Owaid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 417,
                'area_id'    => 417,
                'locale'     => 'en',
                'name'       => 'Al Taween',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 418,
                'area_id'    => 418,
                'locale'     => 'en',
                'name'       => 'Albeledah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 419,
                'area_id'    => 419,
                'locale'     => 'en',
                'name'       => 'Anajaimat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 420,
                'area_id'    => 420,
                'locale'     => 'en',
                'name'       => 'Awhala',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 421,
                'area_id'    => 421,
                'locale'     => 'en',
                'name'       => 'Daba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 422,
                'area_id'    => 422,
                'locale'     => 'en',
                'name'       => 'Dedna',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 423,
                'area_id'    => 423,
                'locale'     => 'en',
                'name'       => 'Fujairah Free Trade Zone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 424,
                'area_id'    => 424,
                'locale'     => 'en',
                'name'       => 'Fujairah Intl Airport',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 425,
                'area_id'    => 425,
                'locale'     => 'en',
                'name'       => 'Fujairah Port',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 426,
                'area_id'    => 426,
                'locale'     => 'en',
                'name'       => 'Halefaath',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 427,
                'area_id'    => 427,
                'locale'     => 'en',
                'name'       => 'Industrial Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 428,
                'area_id'    => 428,
                'locale'     => 'en',
                'name'       => 'Madhab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 429,
                'area_id'    => 429,
                'locale'     => 'en',
                'name'       => 'Masafi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 430,
                'area_id'    => 430,
                'locale'     => 'en',
                'name'       => 'Merashid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 431,
                'area_id'    => 431,
                'locale'     => 'en',
                'name'       => 'Mirbah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 432,
                'area_id'    => 432,
                'locale'     => 'en',
                'name'       => 'Old Fujairah City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 433,
                'area_id'    => 433,
                'locale'     => 'en',
                'name'       => 'Rughaylat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 434,
                'area_id'    => 434,
                'locale'     => 'en',
                'name'       => 'Rumailah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 435,
                'area_id'    => 435,
                'locale'     => 'en',
                'name'       => 'Sakamkam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 436,
                'area_id'    => 436,
                'locale'     => 'en',
                'name'       => 'Sharm',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 437,
                'area_id'    => 437,
                'locale'     => 'en',
                'name'       => 'Al Aahad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 438,
                'area_id'    => 438,
                'locale'     => 'en',
                'name'       => 'Al Abrab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 439,
                'area_id'    => 439,
                'locale'     => 'en',
                'name'       => 'Al Dar Al Baidah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 440,
                'area_id'    => 440,
                'locale'     => 'en',
                'name'       => 'Al Haditha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 441,
                'area_id'    => 441,
                'locale'     => 'en',
                'name'       => 'Al Hawiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 442,
                'area_id'    => 442,
                'locale'     => 'en',
                'name'       => 'Al Humrah - A',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 443,
                'area_id'    => 443,
                'locale'     => 'en',
                'name'       => 'Al Humrah - B',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 444,
                'area_id'    => 444,
                'locale'     => 'en',
                'name'       => 'Al Humrah - C',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 445,
                'area_id'    => 445,
                'locale'     => 'en',
                'name'       => 'Al Humrah - D',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 446,
                'area_id'    => 446,
                'locale'     => 'en',
                'name'       => 'Al Khor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 447,
                'area_id'    => 447,
                'locale'     => 'en',
                'name'       => 'Al Limgadhar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 448,
                'area_id'    => 448,
                'locale'     => 'en',
                'name'       => 'Al Maidan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 449,
                'area_id'    => 449,
                'locale'     => 'en',
                'name'       => 'Al Raas - A',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 450,
                'area_id'    => 450,
                'locale'     => 'en',
                'name'       => 'Al Raas - B',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 451,
                'area_id'    => 451,
                'locale'     => 'en',
                'name'       => 'Al Raas - C',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 452,
                'area_id'    => 452,
                'locale'     => 'en',
                'name'       => 'Al Ramlah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 453,
                'area_id'    => 453,
                'locale'     => 'en',
                'name'       => 'Al Raudah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 454,
                'area_id'    => 454,
                'locale'     => 'en',
                'name'       => 'Al Riqqah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 455,
                'area_id'    => 455,
                'locale'     => 'en',
                'name'       => 'Al Salamah - A',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 456,
                'area_id'    => 456,
                'locale'     => 'en',
                'name'       => 'Al Salamah - B',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 457,
                'area_id'    => 457,
                'locale'     => 'en',
                'name'       => 'Al Salamah - C',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 458,
                'area_id'    => 458,
                'locale'     => 'en',
                'name'       => 'Defence Camp',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 459,
                'area_id'    => 459,
                'locale'     => 'en',
                'name'       => 'Green Belt',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 460,
                'area_id'    => 460,
                'locale'     => 'en',
                'name'       => 'Industrial Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 461,
                'area_id'    => 461,
                'locale'     => 'en',
                'name'       => 'Old Town Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 462,
                'area_id'    => 462,
                'locale'     => 'en',
                'name'       => 'Umm Al Quwain Marina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 463,
                'area_id'    => 463,
                'locale'     => 'en',
                'name'       => 'search cuisine',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 465,
                'area_id'    => 465,
                'locale'     => 'en',
                'name'       => 'Payment Icons',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 469,
                'area_id'    => 469,
                'locale'     => 'en',
                'name'       => 'Al Dhait North',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 470,
                'area_id'    => 470,
                'locale'     => 'en',
                'name'       => 'Al Dhait South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 471,
                'area_id'    => 471,
                'locale'     => 'en',
                'name'       => 'Al Hamra Free Zone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 472,
                'area_id'    => 472,
                'locale'     => 'en',
                'name'       => 'Al Hamra Industrial Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 473,
                'area_id'    => 473,
                'locale'     => 'en',
                'name'       => 'Al Hamra Village',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 474,
                'area_id'    => 474,
                'locale'     => 'en',
                'name'       => 'Al Jazeerah Al Hamra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 475,
                'area_id'    => 475,
                'locale'     => 'en',
                'name'       => 'Al Jesser Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 476,
                'area_id'    => 476,
                'locale'     => 'en',
                'name'       => 'Al Juwais Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 477,
                'area_id'    => 477,
                'locale'     => 'en',
                'name'       => 'Al Mairid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 478,
                'area_id'    => 478,
                'locale'     => 'en',
                'name'       => 'Al Marjan Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 479,
                'area_id'    => 479,
                'locale'     => 'en',
                'name'       => 'Al Nakheel Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 480,
                'area_id'    => 480,
                'locale'     => 'en',
                'name'       => 'Al Uraibi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 481,
                'area_id'    => 481,
                'locale'     => 'en',
                'name'       => 'Burairaat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 482,
                'area_id'    => 482,
                'locale'     => 'en',
                'name'       => 'Dafan Al Khor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 483,
                'area_id'    => 483,
                'locale'     => 'en',
                'name'       => 'Dafan Al Nakheel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 484,
                'area_id'    => 484,
                'locale'     => 'en',
                'name'       => 'Digdagga',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 485,
                'area_id'    => 485,
                'locale'     => 'en',
                'name'       => 'Ghalilah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 486,
                'area_id'    => 486,
                'locale'     => 'en',
                'name'       => 'Hamrania',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 487,
                'area_id'    => 487,
                'locale'     => 'en',
                'name'       => 'Khatt',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 488,
                'area_id'    => 488,
                'locale'     => 'en',
                'name'       => 'Khazam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 489,
                'area_id'    => 489,
                'locale'     => 'en',
                'name'       => 'Mamoora',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 490,
                'area_id'    => 490,
                'locale'     => 'en',
                'name'       => 'Mina Al arab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 491,
                'area_id'    => 491,
                'locale'     => 'en',
                'name'       => 'Rams',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 492,
                'area_id'    => 492,
                'locale'     => 'en',
                'name'       => 'Ras Al Selaab Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 493,
                'area_id'    => 493,
                'locale'     => 'en',
                'name'       => 'Refa`ah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 494,
                'area_id'    => 494,
                'locale'     => 'en',
                'name'       => 'Seih Al Araibi Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 495,
                'area_id'    => 495,
                'locale'     => 'en',
                'name'       => 'Shareesha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 496,
                'area_id'    => 496,
                'locale'     => 'en',
                'name'       => 'Sidroh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 497,
                'area_id'    => 497,
                'locale'     => 'en',
                'name'       => 'Suhaim Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 498,
                'area_id'    => 498,
                'locale'     => 'en',
                'name'       => 'Abdullah Al-Salem',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 499,
                'area_id'    => 499,
                'locale'     => 'en',
                'name'       => 'Adailiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 500,
                'area_id'    => 500,
                'locale'     => 'en',
                'name'       => 'Bneid Al Qar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 501,
                'area_id'    => 501,
                'locale'     => 'en',
                'name'       => 'Daiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 502,
                'area_id'    => 502,
                'locale'     => 'en',
                'name'       => 'Dasma',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 503,
                'area_id'    => 503,
                'locale'     => 'en',
                'name'       => 'Dasman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 504,
                'area_id'    => 504,
                'locale'     => 'en',
                'name'       => 'Doha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 505,
                'area_id'    => 505,
                'locale'     => 'en',
                'name'       => 'Faiha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 506,
                'area_id'    => 506,
                'locale'     => 'en',
                'name'       => 'Ghornata',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 507,
                'area_id'    => 507,
                'locale'     => 'en',
                'name'       => 'Jaber Al Ahmed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 508,
                'area_id'    => 508,
                'locale'     => 'en',
                'name'       => 'Kaifan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 509,
                'area_id'    => 509,
                'locale'     => 'en',
                'name'       => 'Khaldiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 510,
                'area_id'    => 510,
                'locale'     => 'en',
                'name'       => 'Kuwait City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id'         => 511,
                'area_id'    => 511,
                'locale'     => 'en',
                'name'       => 'Mansouriya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 512,
                'area_id'    => 512,
                'locale'     => 'en',
                'name'       => 'Mirqab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 513,
                'area_id'    => 513,
                'locale'     => 'en',
                'name'       => 'Mubarakiya Camps',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 514,
                'area_id'    => 514,
                'locale'     => 'en',
                'name'       => 'Nahda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 515,
                'area_id'    => 515,
                'locale'     => 'en',
                'name'       => 'Nuzha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 516,
                'area_id'    => 516,
                'locale'     => 'en',
                'name'       => 'Qadsiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 517,
                'area_id'    => 517,
                'locale'     => 'en',
                'name'       => 'Qibla',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 518,
                'area_id'    => 518,
                'locale'     => 'en',
                'name'       => 'Qortuba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 519,
                'area_id'    => 519,
                'locale'     => 'en',
                'name'       => 'Rawda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 520,
                'area_id'    => 520,
                'locale'     => 'en',
                'name'       => 'Salhiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 521,
                'area_id'    => 521,
                'locale'     => 'en',
                'name'       => 'Shamiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 522,
                'area_id'    => 522,
                'locale'     => 'en',
                'name'       => 'Sharq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 523,
                'area_id'    => 523,
                'locale'     => 'en',
                'name'       => 'Shuwaikh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 524,
                'area_id'    => 524,
                'locale'     => 'en',
                'name'       => 'Sulaibikhat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 525,
                'area_id'    => 525,
                'locale'     => 'en',
                'name'       => 'Surra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 526,
                'area_id'    => 526,
                'locale'     => 'en',
                'name'       => 'Yarmouk',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 527,
                'area_id'    => 527,
                'locale'     => 'en',
                'name'       => 'Al-Bedae',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 528,
                'area_id'    => 528,
                'locale'     => 'en',
                'name'       => 'Bayan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 529,
                'area_id'    => 529,
                'locale'     => 'en',
                'name'       => 'Hawally',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 530,
                'area_id'    => 530,
                'locale'     => 'en',
                'name'       => 'Hitteen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 531,
                'area_id'    => 531,
                'locale'     => 'en',
                'name'       => 'Jabriya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 532,
                'area_id'    => 532,
                'locale'     => 'en',
                'name'       => 'Maidan Hawally',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 533,
                'area_id'    => 533,
                'locale'     => 'en',
                'name'       => 'Mishrif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 534,
                'area_id'    => 534,
                'locale'     => 'en',
                'name'       => 'Mubarak Al-Abdullah - West Mishref',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 535,
                'area_id'    => 535,
                'locale'     => 'en',
                'name'       => 'Rumaithiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 536,
                'area_id'    => 536,
                'locale'     => 'en',
                'name'       => 'Salam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 537,
                'area_id'    => 537,
                'locale'     => 'en',
                'name'       => 'Salmiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 538,
                'area_id'    => 538,
                'locale'     => 'en',
                'name'       => 'Salwa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 539,
                'area_id'    => 539,
                'locale'     => 'en',
                'name'       => 'Shaab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 540,
                'area_id'    => 540,
                'locale'     => 'en',
                'name'       => 'Shuhada',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 541,
                'area_id'    => 541,
                'locale'     => 'en',
                'name'       => 'Siddiq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 542,
                'area_id'    => 542,
                'locale'     => 'en',
                'name'       => 'Zahra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 543,
                'area_id'    => 543,
                'locale'     => 'en',
                'name'       => 'Abbasiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 544,
                'area_id'    => 544,
                'locale'     => 'en',
                'name'       => 'Abdullah Al-Mubarak - West Jleeb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 545,
                'area_id'    => 545,
                'locale'     => 'en',
                'name'       => 'Abraq Khaitan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 546,
                'area_id'    => 546,
                'locale'     => 'en',
                'name'       => 'Airport',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 547,
                'area_id'    => 547,
                'locale'     => 'en',
                'name'       => 'Andalous',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 548,
                'area_id'    => 548,
                'locale'     => 'en',
                'name'       => 'Ardhiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 549,
                'area_id'    => 549,
                'locale'     => 'en',
                'name'       => 'Ardiya Small Industrial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 550,
                'area_id'    => 550,
                'locale'     => 'en',
                'name'       => 'Ardiya Storage Zone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 551,
                'area_id'    => 551,
                'locale'     => 'en',
                'name'       => 'Ashbeliah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 552,
                'area_id'    => 552,
                'locale'     => 'en',
                'name'       => 'Dhajeej',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 553,
                'area_id'    => 553,
                'locale'     => 'en',
                'name'       => 'Exhibits - South Khaitan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 554,
                'area_id'    => 554,
                'locale'     => 'en',
                'name'       => 'Farwaniya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 555,
                'area_id'    => 555,
                'locale'     => 'en',
                'name'       => 'Ferdous',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 556,
                'area_id'    => 556,
                'locale'     => 'en',
                'name'       => 'Jleeb Al-Shiyoukh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 557,
                'area_id'    => 557,
                'locale'     => 'en',
                'name'       => 'Khaitan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 558,
                'area_id'    => 558,
                'locale'     => 'en',
                'name'       => 'Omariya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 559,
                'area_id'    => 559,
                'locale'     => 'en',
                'name'       => 'Rabiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 560,
                'area_id'    => 560,
                'locale'     => 'en',
                'name'       => 'Rai',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 561,
                'area_id'    => 561,
                'locale'     => 'en',
                'name'       => 'Reggai',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 562,
                'area_id'    => 562,
                'locale'     => 'en',
                'name'       => 'Rehab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 563,
                'area_id'    => 563,
                'locale'     => 'en',
                'name'       => 'Sabah Al-Nasser',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 564,
                'area_id'    => 564,
                'locale'     => 'en',
                'name'       => 'Sheikh Saad Al Abdullah Airport',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 565,
                'area_id'    => 565,
                'locale'     => 'en',
                'name'       => 'Abu Halifa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 566,
                'area_id'    => 566,
                'locale'     => 'en',
                'name'       => 'Al Julayah - Az Zour Sulah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 567,
                'area_id'    => 567,
                'locale'     => 'en',
                'name'       => 'Al-Ahmadi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 568,
                'area_id'    => 568,
                'locale'     => 'en',
                'name'       => 'Ali Sabah Al-Salem - Umm Al Hayman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 569,
                'area_id'    => 569,
                'locale'     => 'en',
                'name'       => 'Dhaher',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 570,
                'area_id'    => 570,
                'locale'     => 'en',
                'name'       => 'East Al Ahmadi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 571,
                'area_id'    => 571,
                'locale'     => 'en',
                'name'       => 'Egaila',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 572,
                'area_id'    => 572,
                'locale'     => 'en',
                'name'       => 'Fahad Al Ahmed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 573,
                'area_id'    => 573,
                'locale'     => 'en',
                'name'       => 'Fahaheel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 574,
                'area_id'    => 574,
                'locale'     => 'en',
                'name'       => 'Fintas',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 575,
                'area_id'    => 575,
                'locale'     => 'en',
                'name'       => 'Hadiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 576,
                'area_id'    => 576,
                'locale'     => 'en',
                'name'       => 'Jaber Al Ali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 577,
                'area_id'    => 577,
                'locale'     => 'en',
                'name'       => 'Khairan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 578,
                'area_id'    => 578,
                'locale'     => 'en',
                'name'       => 'Magwa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 579,
                'area_id'    => 579,
                'locale'     => 'en',
                'name'       => 'Mahboula',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 580,
                'area_id'    => 580,
                'locale'     => 'en',
                'name'       => 'Mangaf',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 581,
                'area_id'    => 581,
                'locale'     => 'en',
                'name'       => 'Mina Abdullah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 582,
                'area_id'    => 582,
                'locale'     => 'en',
                'name'       => 'Mina Al Ahmadi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 583,
                'area_id'    => 583,
                'locale'     => 'en',
                'name'       => 'Nuwaiseeb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 584,
                'area_id'    => 584,
                'locale'     => 'en',
                'name'       => 'Riqqa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 585,
                'area_id'    => 585,
                'locale'     => 'en',
                'name'       => 'Sabah Al Ahmad Marine City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 586,
                'area_id'    => 586,
                'locale'     => 'en',
                'name'       => 'Sabah AL Ahmad residential',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 587,
                'area_id'    => 587,
                'locale'     => 'en',
                'name'       => 'Sabahiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 588,
                'area_id'    => 588,
                'locale'     => 'en',
                'name'       => 'Shuaiba Port',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 589,
                'area_id'    => 589,
                'locale'     => 'en',
                'name'       => 'Wafra farms',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 590,
                'area_id'    => 590,
                'locale'     => 'en',
                'name'       => 'Wafra residential',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 591,
                'area_id'    => 591,
                'locale'     => 'en',
                'name'       => 'Al Naeem',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 592,
                'area_id'    => 592,
                'locale'     => 'en',
                'name'       => 'Amgarah Industrial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 593,
                'area_id'    => 593,
                'locale'     => 'en',
                'name'       => 'Jahra Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 594,
                'area_id'    => 594,
                'locale'     => 'en',
                'name'       => 'Kabd',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 595,
                'area_id'    => 595,
                'locale'     => 'en',
                'name'       => 'Nasseem',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 596,
                'area_id'    => 596,
                'locale'     => 'en',
                'name'       => 'Oyoun',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 597,
                'area_id'    => 597,
                'locale'     => 'en',
                'name'       => 'Qairawan - South Doha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 598,
                'area_id'    => 598,
                'locale'     => 'en',
                'name'       => 'Qasr',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 599,
                'area_id'    => 599,
                'locale'     => 'en',
                'name'       => 'Saad Al Abdullah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 600,
                'area_id'    => 600,
                'locale'     => 'en',
                'name'       => 'Sulaibiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 601,
                'area_id'    => 601,
                'locale'     => 'en',
                'name'       => 'Sulaibiya Indutrial 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 602,
                'area_id'    => 602,
                'locale'     => 'en',
                'name'       => 'Sulaibiya Indutrial 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 603,
                'area_id'    => 603,
                'locale'     => 'en',
                'name'       => 'Sulaibiya Residential',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 604,
                'area_id'    => 604,
                'locale'     => 'en',
                'name'       => 'Taima',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 605,
                'area_id'    => 605,
                'locale'     => 'en',
                'name'       => 'Waha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 606,
                'area_id'    => 606,
                'locale'     => 'en',
                'name'       => 'Abu Ftaira',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 607,
                'area_id'    => 607,
                'locale'     => 'en',
                'name'       => 'Abu Hasaniya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 608,
                'area_id'    => 608,
                'locale'     => 'en',
                'name'       => 'Adan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 609,
                'area_id'    => 609,
                'locale'     => 'en',
                'name'       => 'Al Masayel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 610,
                'area_id'    => 610,
                'locale'     => 'en',
                'name'       => 'Al-Qurain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 611,
                'area_id'    => 611,
                'locale'     => 'en',
                'name'       => 'Al-Qusour',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 612,
                'area_id'    => 612,
                'locale'     => 'en',
                'name'       => 'Coast Strip B',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 613,
                'area_id'    => 613,
                'locale'     => 'en',
                'name'       => 'Fnaitess',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 614,
                'area_id'    => 614,
                'locale'     => 'en',
                'name'       => 'Messila',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 615,
                'area_id'    => 615,
                'locale'     => 'en',
                'name'       => 'Mubarak Al-Kabir',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 616,
                'area_id'    => 616,
                'locale'     => 'en',
                'name'       => 'Sabah Al-Salem',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 617,
                'area_id'    => 617,
                'locale'     => 'en',
                'name'       => 'Sabhan Industrial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 618,
                'area_id'    => 618,
                'locale'     => 'en',
                'name'       => 'South Wista',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 619,
                'area_id'    => 619,
                'locale'     => 'en',
                'name'       => 'West Abu Fetera Small Indust',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 620,
                'area_id'    => 620,
                'locale'     => 'en',
                'name'       => 'Wista',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 621,
                'area_id'    => 621,
                'locale'     => 'en',
                'name'       => 'Al Koudh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 622,
                'area_id'    => 622,
                'locale'     => 'en',
                'name'       => 'Al Koudh 6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 623,
                'area_id'    => 623,
                'locale'     => 'en',
                'name'       => 'Al Mawalih North',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 624,
                'area_id'    => 624,
                'locale'     => 'en',
                'name'       => 'Al Mawalih South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 625,
                'area_id'    => 625,
                'locale'     => 'en',
                'name'       => 'Hail North',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 626,
                'area_id'    => 626,
                'locale'     => 'en',
                'name'       => 'Hail South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 627,
                'area_id'    => 627,
                'locale'     => 'en',
                'name'       => 'Hormuz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 628,
                'area_id'    => 628,
                'locale'     => 'en',
                'name'       => 'Knowledge Oasis Muscat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 629,
                'area_id'    => 629,
                'locale'     => 'en',
                'name'       => 'Maabela',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 630,
                'area_id'    => 630,
                'locale'     => 'en',
                'name'       => 'Muscat Hills',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 631,
                'area_id'    => 631,
                'locale'     => 'en',
                'name'       => 'New Airport',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 632,
                'area_id'    => 632,
                'locale'     => 'en',
                'name'       => 'Rusayl',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 633,
                'area_id'    => 633,
                'locale'     => 'en',
                'name'       => 'Seeb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 634,
                'area_id'    => 634,
                'locale'     => 'en',
                'name'       => 'Sultan Qaboos University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 635,
                'area_id'    => 635,
                'locale'     => 'en',
                'name'       => 'Suq al Seeb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 636,
                'area_id'    => 636,
                'locale'     => 'en',
                'name'       => 'The Wave',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 637,
                'area_id'    => 637,
                'locale'     => 'en',
                'name'       => 'Bait al falaj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 638,
                'area_id'    => 638,
                'locale'     => 'en',
                'name'       => 'CBD',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 639,
                'area_id'    => 639,
                'locale'     => 'en',
                'name'       => 'Darsait',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 640,
                'area_id'    => 640,
                'locale'     => 'en',
                'name'       => 'Hamriya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 641,
                'area_id'    => 641,
                'locale'     => 'en',
                'name'       => 'Jibrooh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 642,
                'area_id'    => 642,
                'locale'     => 'en',
                'name'       => 'MBD',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 643,
                'area_id'    => 643,
                'locale'     => 'en',
                'name'       => 'Muttrah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 644,
                'area_id'    => 644,
                'locale'     => 'en',
                'name'       => 'Ruwi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 645,
                'area_id'    => 645,
                'locale'     => 'en',
                'name'       => 'Wadi Al Kabir',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 646,
                'area_id'    => 646,
                'locale'     => 'en',
                'name'       => 'Al Ansab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 647,
                'area_id'    => 647,
                'locale'     => 'en',
                'name'       => 'Al Azaiba South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 648,
                'area_id'    => 648,
                'locale'     => 'en',
                'name'       => 'Al Ghubra Ash Shamaliyyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 649,
                'area_id'    => 649,
                'locale'     => 'en',
                'name'       => 'Al Khuwayr North',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 650,
                'area_id'    => 650,
                'locale'     => 'en',
                'name'       => 'Al Khuwayr South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 651,
                'area_id'    => 651,
                'locale'     => 'en',
                'name'       => 'Azaiba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 652,
                'area_id'    => 652,
                'locale'     => 'en',
                'name'       => 'Bawshar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 653,
                'area_id'    => 653,
                'locale'     => 'en',
                'name'       => 'Ghala',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 654,
                'area_id'    => 654,
                'locale'     => 'en',
                'name'       => 'Ghubrah Janubiyyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 655,
                'area_id'    => 655,
                'locale'     => 'en',
                'name'       => 'Hay Al Sarooj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 656,
                'area_id'    => 656,
                'locale'     => 'en',
                'name'       => 'Helet El Sad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 657,
                'area_id'    => 657,
                'locale'     => 'en',
                'name'       => 'Khuwair 33',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 658,
                'area_id'    => 658,
                'locale'     => 'en',
                'name'       => 'Madinat Al ?Ilam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 659,
                'area_id'    => 659,
                'locale'     => 'en',
                'name'       => 'Madinat Al Sultan Qaboos',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 660,
                'area_id'    => 660,
                'locale'     => 'en',
                'name'       => 'Mina al Fahal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 661,
                'area_id'    => 661,
                'locale'     => 'en',
                'name'       => 'Qurm',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 662,
                'area_id'    => 662,
                'locale'     => 'en',
                'name'       => 'Rabia Qurum',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 663,
                'area_id'    => 663,
                'locale'     => 'en',
                'name'       => 'Shati Al Qurm',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 664,
                'area_id'    => 664,
                'locale'     => 'en',
                'name'       => 'Wadi Adai',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 665,
                'area_id'    => 665,
                'locale'     => 'en',
                'name'       => 'Wattiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 666,
                'area_id'    => 666,
                'locale'     => 'en',
                'name'       => 'Barr al Jissah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 667,
                'area_id'    => 667,
                'locale'     => 'en',
                'name'       => 'Bustan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 668,
                'area_id'    => 668,
                'locale'     => 'en',
                'name'       => 'Qantab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 669,
                'area_id'    => 669,
                'locale'     => 'en',
                'name'       => 'Seefah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 670,
                'area_id'    => 670,
                'locale'     => 'en',
                'name'       => 'Yetti',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 671,
                'area_id'    => 671,
                'locale'     => 'en',
                'name'       => 'Al Hajar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 672,
                'area_id'    => 672,
                'locale'     => 'en',
                'name'       => 'Amarat Phase 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 673,
                'area_id'    => 673,
                'locale'     => 'en',
                'name'       => 'Amarat Phase 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 674,
                'area_id'    => 674,
                'locale'     => 'en',
                'name'       => 'Amarat Phase 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 675,
                'area_id'    => 675,
                'locale'     => 'en',
                'name'       => 'Amarat Phase 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 676,
                'area_id'    => 676,
                'locale'     => 'en',
                'name'       => 'Amarat Phase 5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 677,
                'area_id'    => 677,
                'locale'     => 'en',
                'name'       => 'Amirat 6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 678,
                'area_id'    => 678,
                'locale'     => 'en',
                'name'       => 'Mahaj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 679,
                'area_id'    => 679,
                'locale'     => 'en',
                'name'       => 'Al Awqadayn',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 680,
                'area_id'    => 680,
                'locale'     => 'en',
                'name'       => 'Al Hafa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 681,
                'area_id'    => 681,
                'locale'     => 'en',
                'name'       => 'Al Hasila',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 682,
                'area_id'    => 682,
                'locale'     => 'en',
                'name'       => 'Al Hisn',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 683,
                'area_id'    => 683,
                'locale'     => 'en',
                'name'       => 'Al Karath',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 684,
                'area_id'    => 684,
                'locale'     => 'en',
                'name'       => 'Al Qawf',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 685,
                'area_id'    => 685,
                'locale'     => 'en',
                'name'       => 'Al Wadi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 686,
                'area_id'    => 686,
                'locale'     => 'en',
                'name'       => 'Ar Rubat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 687,
                'area_id'    => 687,
                'locale'     => 'en',
                'name'       => 'Awqad Al Janubiyyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 688,
                'area_id'    => 688,
                'locale'     => 'en',
                'name'       => 'Awqad Ash Shamaliyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 689,
                'area_id'    => 689,
                'locale'     => 'en',
                'name'       => 'Az Zawiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 690,
                'area_id'    => 690,
                'locale'     => 'en',
                'name'       => 'East Salalah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 691,
                'area_id'    => 691,
                'locale'     => 'en',
                'name'       => 'Janub Ad Dahariz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 692,
                'area_id'    => 692,
                'locale'     => 'en',
                'name'       => 'Janub Madinat As Saad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 693,
                'area_id'    => 693,
                'locale'     => 'en',
                'name'       => 'Jarziz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 694,
                'area_id'    => 694,
                'locale'     => 'en',
                'name'       => 'Sahnawt Al Janubiyyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 695,
                'area_id'    => 695,
                'locale'     => 'en',
                'name'       => 'Salalah Airport (New)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 696,
                'area_id'    => 696,
                'locale'     => 'en',
                'name'       => 'Salalah Gharbiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 697,
                'area_id'    => 697,
                'locale'     => 'en',
                'name'       => 'Salalah Industrial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 698,
                'area_id'    => 698,
                'locale'     => 'en',
                'name'       => 'Salalah Wosta',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 699,
                'area_id'    => 699,
                'locale'     => 'en',
                'name'       => 'Shamal Ad Dahariz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 700,
                'area_id'    => 700,
                'locale'     => 'en',
                'name'       => 'Shamal Madinat As Saadah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 701,
                'area_id'    => 701,
                'locale'     => 'en',
                'name'       => 'Sudh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 702,
                'area_id'    => 702,
                'locale'     => 'en',
                'name'       => 'Umm Al Ghawarif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 703,
                'area_id'    => 703,
                'locale'     => 'en',
                'name'       => 'Al Hazm',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 704,
                'area_id'    => 704,
                'locale'     => 'en',
                'name'       => 'Al Mazahit',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 705,
                'area_id'    => 705,
                'locale'     => 'en',
                'name'       => 'Al Midayrah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 706,
                'area_id'    => 706,
                'locale'     => 'en',
                'name'       => 'Al Wishayl',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 707,
                'area_id'    => 707,
                'locale'     => 'en',
                'name'       => 'Falaj Al Hadees',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 708,
                'area_id'    => 708,
                'locale'     => 'en',
                'name'       => 'Afifa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 709,
                'area_id'    => 709,
                'locale'     => 'en',
                'name'       => 'Al Fatik',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 710,
                'area_id'    => 710,
                'locale'     => 'en',
                'name'       => 'Al Ghushbah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 711,
                'area_id'    => 711,
                'locale'     => 'en',
                'name'       => 'Al Hadhirah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 712,
                'area_id'    => 712,
                'locale'     => 'en',
                'name'       => 'Al Hambar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 713,
                'area_id'    => 713,
                'locale'     => 'en',
                'name'       => 'Al Hujrah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 714,
                'area_id'    => 714,
                'locale'     => 'en',
                'name'       => 'Al Jufra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 715,
                'area_id'    => 715,
                'locale'     => 'en',
                'name'       => 'Al Khuwayriyyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 716,
                'area_id'    => 716,
                'locale'     => 'en',
                'name'       => 'Al Multaqa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 717,
                'area_id'    => 717,
                'locale'     => 'en',
                'name'       => 'Al Uwaynat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 718,
                'area_id'    => 718,
                'locale'     => 'en',
                'name'       => 'Al Zafraan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 719,
                'area_id'    => 719,
                'locale'     => 'en',
                'name'       => 'As Sanqar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 720,
                'area_id'    => 720,
                'locale'     => 'en',
                'name'       => 'As Suwayhrah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 721,
                'area_id'    => 721,
                'locale'     => 'en',
                'name'       => 'At Turayf',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 722,
                'area_id'    => 722,
                'locale'     => 'en',
                'name'       => 'Awtab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 723,
                'area_id'    => 723,
                'locale'     => 'en',
                'name'       => 'Falaj Al Awhi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 724,
                'area_id'    => 724,
                'locale'     => 'en',
                'name'       => 'Falaj Al Qabail',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 725,
                'area_id'    => 725,
                'locale'     => 'en',
                'name'       => 'Harat Ash Shaykh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 726,
                'area_id'    => 726,
                'locale'     => 'en',
                'name'       => 'Karwan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 727,
                'area_id'    => 727,
                'locale'     => 'en',
                'name'       => 'Khawr Al Siyabi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 728,
                'area_id'    => 728,
                'locale'     => 'en',
                'name'       => 'Khwar Al Hulu',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 729,
                'area_id'    => 729,
                'locale'     => 'en',
                'name'       => 'Majan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 730,
                'area_id'    => 730,
                'locale'     => 'en',
                'name'       => 'Majis',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 731,
                'area_id'    => 731,
                'locale'     => 'en',
                'name'       => 'Mina Sohar (Sohar Port)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 732,
                'area_id'    => 732,
                'locale'     => 'en',
                'name'       => 'Sallan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 733,
                'area_id'    => 733,
                'locale'     => 'en',
                'name'       => 'Sohar Sanaiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 734,
                'area_id'    => 734,
                'locale'     => 'en',
                'name'       => 'UMQ',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 735,
                'area_id'    => 735,
                'locale'     => 'en',
                'name'       => 'Abu Al Nakheel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 736,
                'area_id'    => 736,
                'locale'     => 'en',
                'name'       => 'Al Basit',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 737,
                'area_id'    => 737,
                'locale'     => 'en',
                'name'       => 'Al Maragh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 738,
                'area_id'    => 738,
                'locale'     => 'en',
                'name'       => 'Ar Rumays',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 739,
                'area_id'    => 739,
                'locale'     => 'en',
                'name'       => 'Halban',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 740,
                'area_id'    => 740,
                'locale'     => 'en',
                'name'       => 'Haradi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 741,
                'area_id'    => 741,
                'locale'     => 'en',
                'name'       => 'Hay Al Salam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 742,
                'area_id'    => 742,
                'locale'     => 'en',
                'name'       => 'Hayy Asim',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 743,
                'area_id'    => 743,
                'locale'     => 'en',
                'name'       => 'Muraysi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 744,
                'area_id'    => 744,
                'locale'     => 'en',
                'name'       => 'Bahla',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 745,
                'area_id'    => 745,
                'locale'     => 'en',
                'name'       => 'Birkat Al Mooz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 746,
                'area_id'    => 746,
                'locale'     => 'en',
                'name'       => 'Falaj Al Daris',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 747,
                'area_id'    => 747,
                'locale'     => 'en',
                'name'       => 'Firq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 748,
                'area_id'    => 748,
                'locale'     => 'en',
                'name'       => 'Hay Al Turath North',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 749,
                'area_id'    => 749,
                'locale'     => 'en',
                'name'       => 'Hay Al Turath South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 750,
                'area_id'    => 750,
                'locale'     => 'en',
                'name'       => 'Karsha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 751,
                'area_id'    => 751,
                'locale'     => 'en',
                'name'       => 'Karshaa Senaeya (Industrial Area)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 752,
                'area_id'    => 752,
                'locale'     => 'en',
                'name'       => 'Manah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 753,
                'area_id'    => 753,
                'locale'     => 'en',
                'name'       => 'Marfa Dares',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 754,
                'area_id'    => 754,
                'locale'     => 'en',
                'name'       => 'Nizwa Suq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 755,
                'area_id'    => 755,
                'locale'     => 'en',
                'name'       => 'Radet Al Bosaidi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 756,
                'area_id'    => 756,
                'locale'     => 'en',
                'name'       => 'Temsa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 757,
                'area_id'    => 757,
                'locale'     => 'en',
                'name'       => 'Al Ayjah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 758,
                'area_id'    => 758,
                'locale'     => 'en',
                'name'       => 'Al Barr',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 759,
                'area_id'    => 759,
                'locale'     => 'en',
                'name'       => 'Al Husainiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 760,
                'area_id'    => 760,
                'locale'     => 'en',
                'name'       => 'Ar Rusagh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 761,
                'area_id'    => 761,
                'locale'     => 'en',
                'name'       => 'Ash Shaabiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 762,
                'area_id'    => 762,
                'locale'     => 'en',
                'name'       => 'Billad Suq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 763,
                'area_id'    => 763,
                'locale'     => 'en',
                'name'       => 'Harat Al Balush',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 764,
                'area_id'    => 764,
                'locale'     => 'en',
                'name'       => 'Hillat Al Kahraba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 765,
                'area_id'    => 765,
                'locale'     => 'en',
                'name'       => 'Jabal Al Eid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 766,
                'area_id'    => 766,
                'locale'     => 'en',
                'name'       => 'Murtafa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 767,
                'area_id'    => 767,
                'locale'     => 'en',
                'name'       => 'Nismah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 768,
                'area_id'    => 768,
                'locale'     => 'en',
                'name'       => 'Sur University College',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 769,
                'area_id'    => 769,
                'locale'     => 'en',
                'name'       => 'Al Gherifa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 770,
                'area_id'    => 770,
                'locale'     => 'en',
                'name'       => 'Al Helie',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 771,
                'area_id'    => 771,
                'locale'     => 'en',
                'name'       => 'Ard ElGaw',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 772,
                'area_id'    => 772,
                'locale'     => 'en',
                'name'       => 'Buraimi Industrial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 773,
                'area_id'    => 773,
                'locale'     => 'en',
                'name'       => 'Buraimi University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 774,
                'area_id'    => 774,
                'locale'     => 'en',
                'name'       => 'Hamasa Shaabiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 775,
                'area_id'    => 775,
                'locale'     => 'en',
                'name'       => 'Khadrah Al Sieh (New)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 776,
                'area_id'    => 776,
                'locale'     => 'en',
                'name'       => 'Khadrah Qadema (Old)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 777,
                'area_id'    => 777,
                'locale'     => 'en',
                'name'       => 'Mazara Al Aqda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 778,
                'area_id'    => 778,
                'locale'     => 'en',
                'name'       => 'Saraa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 779,
                'area_id'    => 779,
                'locale'     => 'en',
                'name'       => 'Ar Rayibah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 780,
                'area_id'    => 780,
                'locale'     => 'en',
                'name'       => 'Araqi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 781,
                'area_id'    => 781,
                'locale'     => 'en',
                'name'       => 'Dubaishi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 782,
                'area_id'    => 782,
                'locale'     => 'en',
                'name'       => 'Hijjar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 783,
                'area_id'    => 783,
                'locale'     => 'en',
                'name'       => 'Ibri Hospital',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 784,
                'area_id'    => 784,
                'locale'     => 'en',
                'name'       => 'Ibri Souq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 785,
                'area_id'    => 785,
                'locale'     => 'en',
                'name'       => 'Abdali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 786,
                'area_id'    => 786,
                'locale'     => 'en',
                'name'       => 'Abdoun',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 787,
                'area_id'    => 787,
                'locale'     => 'en',
                'name'       => 'Abu Alanda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 788,
                'area_id'    => 788,
                'locale'     => 'en',
                'name'       => 'Abu Nseir',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 789,
                'area_id'    => 789,
                'locale'     => 'en',
                'name'       => 'Airport Road - Dunes Bridge',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 790,
                'area_id'    => 790,
                'locale'     => 'en',
                'name'       => 'Airport Road - Madaba Bridge',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 791,
                'area_id'    => 791,
                'locale'     => 'en',
                'name'       => 'Airport Road - Manaseer Gs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 792,
                'area_id'    => 792,
                'locale'     => 'en',
                'name'       => 'Airport Road - Nakheel Village',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 793,
                'area_id'    => 793,
                'locale'     => 'en',
                'name'       => 'Al Ashrafieh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 794,
                'area_id'    => 794,
                'locale'     => 'en',
                'name'       => 'Al Bayader',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 795,
                'area_id'    => 795,
                'locale'     => 'en',
                'name'       => 'Al Bnayyat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 796,
                'area_id'    => 796,
                'locale'     => 'en',
                'name'       => 'Al Fuhais',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 797,
                'area_id'    => 797,
                'locale'     => 'en',
                'name'       => 'Al Gardens',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 798,
                'area_id'    => 798,
                'locale'     => 'en',
                'name'       => 'Al Hashmi Al Janobi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 799,
                'area_id'    => 799,
                'locale'     => 'en',
                'name'       => 'Al Hashmi Al Shamali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 800,
                'area_id'    => 800,
                'locale'     => 'en',
                'name'       => 'Al Hummar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 801,
                'area_id'    => 801,
                'locale'     => 'en',
                'name'       => 'Al Jandaweel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 802,
                'area_id'    => 802,
                'locale'     => 'en',
                'name'       => 'Al Jurn',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 803,
                'area_id'    => 803,
                'locale'     => 'en',
                'name'       => 'Al Kamaliya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 804,
                'area_id'    => 804,
                'locale'     => 'en',
                'name'       => 'Al Kursi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 805,
                'area_id'    => 805,
                'locale'     => 'en',
                'name'       => 'Al Muqabalain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 806,
                'area_id'    => 806,
                'locale'     => 'en',
                'name'       => 'Al Qusour',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 807,
                'area_id'    => 807,
                'locale'     => 'en',
                'name'       => 'Al Qwaismeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 808,
                'area_id'    => 808,
                'locale'     => 'en',
                'name'       => 'Al Rabiah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 809,
                'area_id'    => 809,
                'locale'     => 'en',
                'name'       => 'Al Rajeeb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 810,
                'area_id'    => 810,
                'locale'     => 'en',
                'name'       => 'Al Rawabi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 811,
                'area_id'    => 811,
                'locale'     => 'en',
                'name'       => 'Al Rawnaq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 812,
                'area_id'    => 812,
                'locale'     => 'en',
                'name'       => 'Al Ridwan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 813,
                'area_id'    => 813,
                'locale'     => 'en',
                'name'       => 'Al Sahel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 814,
                'area_id'    => 814,
                'locale'     => 'en',
                'name'       => 'Al Sina\'a',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 815,
                'area_id'    => 815,
                'locale'     => 'en',
                'name'       => 'Al Swaifyeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 816,
                'area_id'    => 816,
                'locale'     => 'en',
                'name'       => 'Arjan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 817,
                'area_id'    => 817,
                'locale'     => 'en',
                'name'       => 'Bader Al Jadeda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 818,
                'area_id'    => 818,
                'locale'     => 'en',
                'name'       => 'Dabouq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 819,
                'area_id'    => 819,
                'locale'     => 'en',
                'name'       => 'Dabouq - Baccaloria',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 820,
                'area_id'    => 820,
                'locale'     => 'en',
                'name'       => 'Dabouq - Ferdous',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 821,
                'area_id'    => 821,
                'locale'     => 'en',
                'name'       => 'Daheit Al Ameer Hasan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 822,
                'area_id'    => 822,
                'locale'     => 'en',
                'name'       => 'Daheit Al Aqsa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 823,
                'area_id'    => 823,
                'locale'     => 'en',
                'name'       => 'Daheit Al Rasheed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 824,
                'area_id'    => 824,
                'locale'     => 'en',
                'name'       => 'Daheit Al Yasmeen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 825,
                'area_id'    => 825,
                'locale'     => 'en',
                'name'       => 'Dahiet Al Ameer Rashed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 826,
                'area_id'    => 826,
                'locale'     => 'en',
                'name'       => 'Dahiet Al Hussain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 827,
                'area_id'    => 827,
                'locale'     => 'en',
                'name'       => 'Deir Ghbar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 828,
                'area_id'    => 828,
                'locale'     => 'en',
                'name'       => 'Downtown',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 829,
                'area_id'    => 829,
                'locale'     => 'en',
                'name'       => 'Hay Al Rahmanieh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 830,
                'area_id'    => 830,
                'locale'     => 'en',
                'name'       => 'Hay Albarakeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 831,
                'area_id'    => 831,
                'locale'     => 'en',
                'name'       => 'Hay Alkhaledeen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 832,
                'area_id'    => 832,
                'locale'     => 'en',
                'name'       => 'Hay Alsaleheen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 833,
                'area_id'    => 833,
                'locale'     => 'en',
                'name'       => 'Iraq Al Ameer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 834,
                'area_id'    => 834,
                'locale'     => 'en',
                'name'       => 'Jabal Al Hussain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 835,
                'area_id'    => 835,
                'locale'     => 'en',
                'name'       => 'Jabal Al Nuzha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 836,
                'area_id'    => 836,
                'locale'     => 'en',
                'name'       => 'Jabal Al Weibdeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 837,
                'area_id'    => 837,
                'locale'     => 'en',
                'name'       => 'Jabal Al Zohor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 838,
                'area_id'    => 838,
                'locale'     => 'en',
                'name'       => 'Jabal Amman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 839,
                'area_id'    => 839,
                'locale'     => 'en',
                'name'       => 'Jubaiha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 840,
                'area_id'    => 840,
                'locale'     => 'en',
                'name'       => 'Khalda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 841,
                'area_id'    => 841,
                'locale'     => 'en',
                'name'       => 'King Hussein Business Park',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 842,
                'area_id'    => 842,
                'locale'     => 'en',
                'name'       => 'Mahes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 843,
                'area_id'    => 843,
                'locale'     => 'en',
                'name'       => 'Marj El Hamam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 844,
                'area_id'    => 844,
                'locale'     => 'en',
                'name'       => 'Marka',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 845,
                'area_id'    => 845,
                'locale'     => 'en',
                'name'       => 'Naour',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 846,
                'area_id'    => 846,
                'locale'     => 'en',
                'name'       => 'Raghadan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 847,
                'area_id'    => 847,
                'locale'     => 'en',
                'name'       => 'Ras El Ain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 848,
                'area_id'    => 848,
                'locale'     => 'en',
                'name'       => 'Shafa Badran',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 849,
                'area_id'    => 849,
                'locale'     => 'en',
                'name'       => 'Shmaisani',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 850,
                'area_id'    => 850,
                'locale'     => 'en',
                'name'       => 'Sports City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 851,
                'area_id'    => 851,
                'locale'     => 'en',
                'name'       => 'Swelieh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 852,
                'area_id'    => 852,
                'locale'     => 'en',
                'name'       => 'Tabarboor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 853,
                'area_id'    => 853,
                'locale'     => 'en',
                'name'       => 'Tla\' Ali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 854,
                'area_id'    => 854,
                'locale'     => 'en',
                'name'       => 'Um El Summaq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 855,
                'area_id'    => 855,
                'locale'     => 'en',
                'name'       => 'Um Uthaiena',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 856,
                'area_id'    => 856,
                'locale'     => 'en',
                'name'       => 'University Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 857,
                'area_id'    => 857,
                'locale'     => 'en',
                'name'       => 'Wadi El Seer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 858,
                'area_id'    => 858,
                'locale'     => 'en',
                'name'       => 'Al Atiba\'',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 859,
                'area_id'    => 859,
                'locale'     => 'en',
                'name'       => 'Al Balad Al Qadeemeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 860,
                'area_id'    => 860,
                'locale'     => 'en',
                'name'       => 'Al Herafeyeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 861,
                'area_id'    => 861,
                'locale'     => 'en',
                'name'       => 'Al Mahdood Al Gharby',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 862,
                'area_id'    => 862,
                'locale'     => 'en',
                'name'       => 'Al Mahdood Al Sharqy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 863,
                'area_id'    => 863,
                'locale'     => 'en',
                'name'       => 'Al Mahdood Al Wasat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 864,
                'area_id'    => 864,
                'locale'     => 'en',
                'name'       => 'Al Manarah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 865,
                'area_id'    => 865,
                'locale'     => 'en',
                'name'       => 'Al Rimaal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 866,
                'area_id'    => 866,
                'locale'     => 'en',
                'name'       => 'Al Sakaneyeh (1)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 867,
                'area_id'    => 867,
                'locale'     => 'en',
                'name'       => 'Al Sakaneyeh (10)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 868,
                'area_id'    => 868,
                'locale'     => 'en',
                'name'       => 'Al Sakaneyeh (2)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 869,
                'area_id'    => 869,
                'locale'     => 'en',
                'name'       => 'Al Sakaneyeh (3)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 870,
                'area_id'    => 870,
                'locale'     => 'en',
                'name'       => 'Al Sakaneyeh (4)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 871,
                'area_id'    => 871,
                'locale'     => 'en',
                'name'       => 'Al Sakaneyeh (5)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 872,
                'area_id'    => 872,
                'locale'     => 'en',
                'name'       => 'Al Sakaneyeh (6)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 873,
                'area_id'    => 873,
                'locale'     => 'en',
                'name'       => 'Al Sakaneyeh (7)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 874,
                'area_id'    => 874,
                'locale'     => 'en',
                'name'       => 'Al Sakaneyeh (8)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 875,
                'area_id'    => 875,
                'locale'     => 'en',
                'name'       => 'Al Sakaneyeh (9)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 876,
                'area_id'    => 876,
                'locale'     => 'en',
                'name'       => 'Al Shalalah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 877,
                'area_id'    => 877,
                'locale'     => 'en',
                'name'       => 'Al U\'la',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 878,
                'area_id'    => 878,
                'locale'     => 'en',
                'name'       => 'Sakan Al Asmedah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 879,
                'area_id'    => 879,
                'locale'     => 'en',
                'name'       => 'Tala Bay',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 880,
                'area_id'    => 880,
                'locale'     => 'en',
                'name'       => '30 Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 881,
                'area_id'    => 881,
                'locale'     => 'en',
                'name'       => 'Al Balad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 882,
                'area_id'    => 882,
                'locale'     => 'en',
                'name'       => 'Al Barha Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 883,
                'area_id'    => 883,
                'locale'     => 'en',
                'name'       => 'Al Dorra Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 884,
                'area_id'    => 884,
                'locale'     => 'en',
                'name'       => 'Al Eiadat Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 885,
                'area_id'    => 885,
                'locale'     => 'en',
                'name'       => 'Al Hashmy Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 886,
                'area_id'    => 886,
                'locale'     => 'en',
                'name'       => 'Al Hay Al Gharby',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 887,
                'area_id'    => 887,
                'locale'     => 'en',
                'name'       => 'Al Hay Al Janooby',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 888,
                'area_id'    => 888,
                'locale'     => 'en',
                'name'       => 'Al Hay Al Sharqy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 889,
                'area_id'    => 889,
                'locale'     => 'en',
                'name'       => 'Al Hisbeh Al Markizeya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 890,
                'area_id'    => 890,
                'locale'     => 'en',
                'name'       => 'Al Huson',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 891,
                'area_id'    => 891,
                'locale'     => 'en',
                'name'       => 'Al Huson Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 892,
                'area_id'    => 892,
                'locale'     => 'en',
                'name'       => 'Al Lawazem Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 893,
                'area_id'    => 893,
                'locale'     => 'en',
                'name'       => 'Al Madinah Al Sena\'eiah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 894,
                'area_id'    => 894,
                'locale'     => 'en',
                'name'       => 'Al Madrase Al Shamela',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 895,
                'area_id'    => 895,
                'locale'     => 'en',
                'name'       => 'Al Mal\'ab Al Baladi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 896,
                'area_id'    => 896,
                'locale'     => 'en',
                'name'       => 'Al Matla\'',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 897,
                'area_id'    => 897,
                'locale'     => 'en',
                'name'       => 'Al Naseem Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 898,
                'area_id'    => 898,
                'locale'     => 'en',
                'name'       => 'Al Nuzha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 899,
                'area_id'    => 899,
                'locale'     => 'en',
                'name'       => 'Al Qubeh Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 900,
                'area_id'    => 900,
                'locale'     => 'en',
                'name'       => 'Al Quds Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 901,
                'area_id'    => 901,
                'locale'     => 'en',
                'name'       => 'Al Rabiah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 902,
                'area_id'    => 902,
                'locale'     => 'en',
                'name'       => 'Al Rahebat Al Wardiah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 903,
                'area_id'    => 903,
                'locale'     => 'en',
                'name'       => 'Al Rasheed Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 904,
                'area_id'    => 904,
                'locale'     => 'en',
                'name'       => 'Al Sareeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 905,
                'area_id'    => 905,
                'locale'     => 'en',
                'name'       => 'Al Sonbola',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 906,
                'area_id'    => 906,
                'locale'     => 'en',
                'name'       => 'Al Souq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 907,
                'area_id'    => 907,
                'locale'     => 'en',
                'name'       => 'Al Thaqafa Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 908,
                'area_id'    => 908,
                'locale'     => 'en',
                'name'       => 'Albayyada Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 909,
                'area_id'    => 909,
                'locale'     => 'en',
                'name'       => 'Bait Ras',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 910,
                'area_id'    => 910,
                'locale'     => 'en',
                'name'       => 'Behind Safeway',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 911,
                'area_id'    => 911,
                'locale'     => 'en',
                'name'       => 'Bushra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 912,
                'area_id'    => 912,
                'locale'     => 'en',
                'name'       => 'Childrens Village (SOS)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 913,
                'area_id'    => 913,
                'locale'     => 'en',
                'name'       => 'Daheit Al Ameer Rashed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 914,
                'area_id'    => 914,
                'locale'     => 'en',
                'name'       => 'Daheit Al Hussain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 915,
                'area_id'    => 915,
                'locale'     => 'en',
                'name'       => 'Eidoon',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 916,
                'area_id'    => 916,
                'locale'     => 'en',
                'name'       => 'Eidoon Military Hospital',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 917,
                'area_id'    => 917,
                'locale'     => 'en',
                'name'       => 'Fo\'ara Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 918,
                'area_id'    => 918,
                'locale'     => 'en',
                'name'       => 'Ghorfat Al Tejara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 919,
                'area_id'    => 919,
                'locale'     => 'en',
                'name'       => 'Hadiqet Al Zahraa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 920,
                'area_id'    => 920,
                'locale'     => 'en',
                'name'       => 'Hakama',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 921,
                'area_id'    => 921,
                'locale'     => 'en',
                'name'       => 'Hakama Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 922,
                'area_id'    => 922,
                'locale'     => 'en',
                'name'       => 'Hasan Al Tal Mosque',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 923,
                'area_id'    => 923,
                'locale'     => 'en',
                'name'       => 'Hay Al Abraar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 924,
                'area_id'    => 924,
                'locale'     => 'en',
                'name'       => 'Hay Al Qaselah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 925,
                'area_id'    => 925,
                'locale'     => 'en',
                'name'       => 'Hay Al Turokman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 926,
                'area_id'    => 926,
                'locale'     => 'en',
                'name'       => 'Hay Al Worood',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 927,
                'area_id'    => 927,
                'locale'     => 'en',
                'name'       => 'Hay Alia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 928,
                'area_id'    => 928,
                'locale'     => 'en',
                'name'       => 'Hay Altlool',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 929,
                'area_id'    => 929,
                'locale'     => 'en',
                'name'       => 'Hay Twaal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 930,
                'area_id'    => 930,
                'locale'     => 'en',
                'name'       => 'Honaina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 931,
                'area_id'    => 931,
                'locale'     => 'en',
                'name'       => 'Howara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 932,
                'area_id'    => 932,
                'locale'     => 'en',
                'name'       => 'Irbid Girl\'s College',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 933,
                'area_id'    => 933,
                'locale'     => 'en',
                'name'       => 'Irbid Mall',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 934,
                'area_id'    => 934,
                'locale'     => 'en',
                'name'       => 'Isharet Al Darawshe',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 935,
                'area_id'    => 935,
                'locale'     => 'en',
                'name'       => 'Isharet Al Iskan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 936,
                'area_id'    => 936,
                'locale'     => 'en',
                'name'       => 'Isharet Al Malika Noor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 937,
                'area_id'    => 937,
                'locale'     => 'en',
                'name'       => 'Iskan Al A\'mileen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 938,
                'area_id'    => 938,
                'locale'     => 'en',
                'name'       => 'Iskan Al Atiba\'',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 939,
                'area_id'    => 939,
                'locale'     => 'en',
                'name'       => 'Iskan Al Dobbat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 940,
                'area_id'    => 940,
                'locale'     => 'en',
                'name'       => 'Iskan Al Mohandeseen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 941,
                'area_id'    => 941,
                'locale'     => 'en',
                'name'       => 'Joud Hotel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 942,
                'area_id'    => 942,
                'locale'     => 'en',
                'name'       => 'Ketem',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 943,
                'area_id'    => 943,
                'locale'     => 'en',
                'name'       => 'Kherbet Qasem',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 944,
                'area_id'    => 944,
                'locale'     => 'en',
                'name'       => 'King Abdullah University Hospital',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 945,
                'area_id'    => 945,
                'locale'     => 'en',
                'name'       => 'Kofor Youba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 946,
                'area_id'    => 946,
                'locale'     => 'en',
                'name'       => 'Mojamma\' Al Aghwaar Al Jadeed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 947,
                'area_id'    => 947,
                'locale'     => 'en',
                'name'       => 'Mojamma\' Al Shamali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 948,
                'area_id'    => 948,
                'locale'     => 'en',
                'name'       => 'Mojamma\' Alshaikh Khaleel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 949,
                'area_id'    => 949,
                'locale'     => 'en',
                'name'       => 'Mojamma\' Amman Al Jadeed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 950,
                'area_id'    => 950,
                'locale'     => 'en',
                'name'       => 'Mokhayam Al Shaheed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 951,
                'area_id'    => 951,
                'locale'     => 'en',
                'name'       => 'Mokhayam Irbid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 952,
                'area_id'    => 952,
                'locale'     => 'en',
                'name'       => 'Palestine Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 953,
                'area_id'    => 953,
                'locale'     => 'en',
                'name'       => 'Petra Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 954,
                'area_id'    => 954,
                'locale'     => 'en',
                'name'       => 'Princess Basma Hospital',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 955,
                'area_id'    => 955,
                'locale'     => 'en',
                'name'       => 'Qasr Al Awwadeen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 956,
                'area_id'    => 956,
                'locale'     => 'en',
                'name'       => 'Sahara Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 957,
                'area_id'    => 957,
                'locale'     => 'en',
                'name'       => 'Sal Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 958,
                'area_id'    => 958,
                'locale'     => 'en',
                'name'       => 'Salet Al Sharq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 959,
                'area_id'    => 959,
                'locale'     => 'en',
                'name'       => 'Sharekat Al Kahraba Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 960,
                'area_id'    => 960,
                'locale'     => 'en',
                'name'       => 'Tabariya School',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 961,
                'area_id'    => 961,
                'locale'     => 'en',
                'name'       => 'University of Science and Technology',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 962,
                'area_id'    => 962,
                'locale'     => 'en',
                'name'       => 'University Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 963,
                'area_id'    => 963,
                'locale'     => 'en',
                'name'       => 'Zabda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 964,
                'area_id'    => 964,
                'locale'     => 'en',
                'name'       => 'Al Andalusiah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 965,
                'area_id'    => 965,
                'locale'     => 'en',
                'name'       => 'Al Hay Al Sharqy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 966,
                'area_id'    => 966,
                'locale'     => 'en',
                'name'       => 'Al Nuzha Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 967,
                'area_id'    => 967,
                'locale'     => 'en',
                'name'       => 'American University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 968,
                'area_id'    => 968,
                'locale'     => 'en',
                'name'       => 'German University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 969,
                'area_id'    => 969,
                'locale'     => 'en',
                'name'       => 'Haret Jdoudna',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 970,
                'area_id'    => 970,
                'locale'     => 'en',
                'name'       => 'King\'s Academy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 971,
                'area_id'    => 971,
                'locale'     => 'en',
                'name'       => 'Al Andalusiah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 972,
                'area_id'    => 972,
                'locale'     => 'en',
                'name'       => 'Al Hay Al Sharqy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 973,
                'area_id'    => 973,
                'locale'     => 'en',
                'name'       => 'Al Nuzha Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 974,
                'area_id'    => 974,
                'locale'     => 'en',
                'name'       => 'American University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 975,
                'area_id'    => 975,
                'locale'     => 'en',
                'name'       => 'German University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 976,
                'area_id'    => 976,
                'locale'     => 'en',
                'name'       => 'Haret Jdoudna',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 977,
                'area_id'    => 977,
                'locale'     => 'en',
                'name'       => 'King\'s Academy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 978,
                'area_id'    => 978,
                'locale'     => 'en',
                'name'       => 'Al Autostrad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 979,
                'area_id'    => 979,
                'locale'     => 'en',
                'name'       => 'Al ghweariyyeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 980,
                'area_id'    => 980,
                'locale'     => 'en',
                'name'       => 'Al Hashemieh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 981,
                'area_id'    => 981,
                'locale'     => 'en',
                'name'       => 'Al Hawooz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 982,
                'area_id'    => 982,
                'locale'     => 'en',
                'name'       => 'Al Jaish Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 983,
                'area_id'    => 983,
                'locale'     => 'en',
                'name'       => 'Al Madinah Al Monawarah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 984,
                'area_id'    => 984,
                'locale'     => 'en',
                'name'       => 'Al mantika Al Hurra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 985,
                'area_id'    => 985,
                'locale'     => 'en',
                'name'       => 'Al Souq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 986,
                'area_id'    => 986,
                'locale'     => 'en',
                'name'       => 'Al Sukhneh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 987,
                'area_id'    => 987,
                'locale'     => 'en',
                'name'       => 'Al Tatweer Al Hadari',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 988,
                'area_id'    => 988,
                'locale'     => 'en',
                'name'       => 'Al Tatweer Al Hadari Rusaifah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 989,
                'area_id'    => 989,
                'locale'     => 'en',
                'name'       => 'Al Zarqa Al Jadeedeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 990,
                'area_id'    => 990,
                'locale'     => 'en',
                'name'       => 'Al Zawahra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 991,
                'area_id'    => 991,
                'locale'     => 'en',
                'name'       => 'Al-Qadisyeh - Rusaifeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 992,
                'area_id'    => 992,
                'locale'     => 'en',
                'name'       => 'Awajan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 993,
                'area_id'    => 993,
                'locale'     => 'en',
                'name'       => 'Dahiet Al Amera Haya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 994,
                'area_id'    => 994,
                'locale'     => 'en',
                'name'       => 'Hay Al Ameer Mohammad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 995,
                'area_id'    => 995,
                'locale'     => 'en',
                'name'       => 'Hay Al Hussain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 996,
                'area_id'    => 996,
                'locale'     => 'en',
                'name'       => 'Hay Al Iskan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 997,
                'area_id'    => 997,
                'locale'     => 'en',
                'name'       => 'Hay Al Jundi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 998,
                'area_id'    => 998,
                'locale'     => 'en',
                'name'       => 'Hay Al Nuzha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 999,
                'area_id'    => 999,
                'locale'     => 'en',
                'name'       => 'Hay Al-Rasheed - Rusaifah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1000,
                'area_id'    => 1000,
                'locale'     => 'en',
                'name'       => 'Hay Ja\'far Al Tayyar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1001,
                'area_id'    => 1001,
                'locale'     => 'en',
                'name'       => 'Hay Ma\'soom',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1002,
                'area_id'    => 1002,
                'locale'     => 'en',
                'name'       => 'Hay Ramzi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1003,
                'area_id'    => 1003,
                'locale'     => 'en',
                'name'       => 'Hay Shaker',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1004,
                'area_id'    => 1004,
                'locale'     => 'en',
                'name'       => 'Iskan Al Batrawi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1005,
                'area_id'    => 1005,
                'locale'     => 'en',
                'name'       => 'Iskan Talal - Rusaifeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1006,
                'area_id'    => 1006,
                'locale'     => 'en',
                'name'       => 'Jabal Al Abyad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1007,
                'area_id'    => 1007,
                'locale'     => 'en',
                'name'       => 'Jabal Al Ameer Hamza',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1008,
                'area_id'    => 1008,
                'locale'     => 'en',
                'name'       => 'Jabal Al Ameer Hasan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1009,
                'area_id'    => 1009,
                'locale'     => 'en',
                'name'       => 'Jabal Al Amera Rahma',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1010,
                'area_id'    => 1010,
                'locale'     => 'en',
                'name'       => 'Jabal El Shamali Rusaifeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1011,
                'area_id'    => 1011,
                'locale'     => 'en',
                'name'       => 'Jabal Tareq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1012,
                'area_id'    => 1012,
                'locale'     => 'en',
                'name'       => 'Jana\'a',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1013,
                'area_id'    => 1013,
                'locale'     => 'en',
                'name'       => 'Madinet El Sharq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1014,
                'area_id'    => 1014,
                'locale'     => 'en',
                'name'       => 'Rusaifeh El Janoobi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1015,
                'area_id'    => 1015,
                'locale'     => 'en',
                'name'       => 'The Hashemite University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1016,
                'area_id'    => 1016,
                'locale'     => 'en',
                'name'       => 'Wadi Al Aash',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1017,
                'area_id'    => 1017,
                'locale'     => 'en',
                'name'       => 'Wadi Al Hajar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1018,
                'area_id'    => 1018,
                'locale'     => 'en',
                'name'       => 'Zarqa Private University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1019,
                'area_id'    => 1019,
                'locale'     => 'en',
                'name'       => 'Manama',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1020,
                'area_id'    => 1020,
                'locale'     => 'en',
                'name'       => 'Gudaibiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1021,
                'area_id'    => 1021,
                'locale'     => 'en',
                'name'       => 'Al Seef',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1022,
                'area_id'    => 1022,
                'locale'     => 'en',
                'name'       => 'Adliya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1023,
                'area_id'    => 1023,
                'locale'     => 'en',
                'name'       => 'Mahoz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1024,
                'area_id'    => 1024,
                'locale'     => 'en',
                'name'       => 'Tubli',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1025,
                'area_id'    => 1025,
                'locale'     => 'en',
                'name'       => 'Isa Town',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1026,
                'area_id'    => 1026,
                'locale'     => 'en',
                'name'       => 'Jirdab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1027,
                'area_id'    => 1027,
                'locale'     => 'en',
                'name'       => 'Sitra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1028,
                'area_id'    => 1028,
                'locale'     => 'en',
                'name'       => 'Jidhafs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1029,
                'area_id'    => 1029,
                'locale'     => 'en',
                'name'       => 'Juffair',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1030,
                'area_id'    => 1030,
                'locale'     => 'en',
                'name'       => 'Salmaniya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1031,
                'area_id'    => 1031,
                'locale'     => 'en',
                'name'       => 'Muharraq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1032,
                'area_id'    => 1032,
                'locale'     => 'en',
                'name'       => 'Qalali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1033,
                'area_id'    => 1033,
                'locale'     => 'en',
                'name'       => 'Amwaj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1034,
                'area_id'    => 1034,
                'locale'     => 'en',
                'name'       => 'Busaiteen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1035,
                'area_id'    => 1035,
                'locale'     => 'en',
                'name'       => 'Aldeer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1036,
                'area_id'    => 1036,
                'locale'     => 'en',
                'name'       => 'Hidd',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1037,
                'area_id'    => 1037,
                'locale'     => 'en',
                'name'       => 'Budaiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1038,
                'area_id'    => 1038,
                'locale'     => 'en',
                'name'       => 'Salmabad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1039,
                'area_id'    => 1039,
                'locale'     => 'en',
                'name'       => 'A?ali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1040,
                'area_id'    => 1040,
                'locale'     => 'en',
                'name'       => 'Barbar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1041,
                'area_id'    => 1041,
                'locale'     => 'en',
                'name'       => 'Hamad Town',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1042,
                'area_id'    => 1042,
                'locale'     => 'en',
                'name'       => 'Al-Malikiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1043,
                'area_id'    => 1043,
                'locale'     => 'en',
                'name'       => 'Sar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1044,
                'area_id'    => 1044,
                'locale'     => 'en',
                'name'       => 'Hamala',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1045,
                'area_id'    => 1045,
                'locale'     => 'en',
                'name'       => 'Riffa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1046,
                'area_id'    => 1046,
                'locale'     => 'en',
                'name'       => 'Zayed Town',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1047,
                'area_id'    => 1047,
                'locale'     => 'en',
                'name'       => 'Isa Town',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1048,
                'area_id'    => 1048,
                'locale'     => 'en',
                'name'       => 'Sanad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1049,
                'area_id'    => 1049,
                'locale'     => 'en',
                'name'       => 'Nuwaidrat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1050,
                'area_id'    => 1050,
                'locale'     => 'en',
                'name'       => 'A\'ali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1051,
                'area_id'    => 1051,
                'locale'     => 'en',
                'name'       => 'Aldur',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1052,
                'area_id'    => 1052,
                'locale'     => 'en',
                'name'       => 'Zallaq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1053,
                'area_id'    => 1053,
                'locale'     => 'en',
                'name'       => 'Riyadh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1054,
                'area_id'    => 1054,
                'locale'     => 'en',
                'name'       => 'Al Diriyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1055,
                'area_id'    => 1055,
                'locale'     => 'en',
                'name'       => 'Al Kharj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1056,
                'area_id'    => 1056,
                'locale'     => 'en',
                'name'       => 'Al Duwadimi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1057,
                'area_id'    => 1057,
                'locale'     => 'en',
                'name'       => 'Al Majma\'ah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1058,
                'area_id'    => 1058,
                'locale'     => 'en',
                'name'       => 'Al Quway\'iyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1059,
                'area_id'    => 1059,
                'locale'     => 'en',
                'name'       => 'Wadi Al Dawasir',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1060,
                'area_id'    => 1060,
                'locale'     => 'en',
                'name'       => 'Al Aflaj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1061,
                'area_id'    => 1061,
                'locale'     => 'en',
                'name'       => 'Al Zulfi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1062,
                'area_id'    => 1062,
                'locale'     => 'en',
                'name'       => 'Shaqra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1063,
                'area_id'    => 1063,
                'locale'     => 'en',
                'name'       => 'Howtat Bani Tamim',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1064,
                'area_id'    => 1064,
                'locale'     => 'en',
                'name'       => 'Afif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1065,
                'area_id'    => 1065,
                'locale'     => 'en',
                'name'       => 'Al Sulayyil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1066,
                'area_id'    => 1066,
                'locale'     => 'en',
                'name'       => 'Dhurma',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1067,
                'area_id'    => 1067,
                'locale'     => 'en',
                'name'       => 'Al Muzahimiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1068,
                'area_id'    => 1068,
                'locale'     => 'en',
                'name'       => 'Rumah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1069,
                'area_id'    => 1069,
                'locale'     => 'en',
                'name'       => 'Thadiq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1070,
                'area_id'    => 1070,
                'locale'     => 'en',
                'name'       => 'Huraymila',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1071,
                'area_id'    => 1071,
                'locale'     => 'en',
                'name'       => 'Al Hariq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1072,
                'area_id'    => 1072,
                'locale'     => 'en',
                'name'       => 'Al Ghat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1073,
                'area_id'    => 1073,
                'locale'     => 'en',
                'name'       => 'Mecca',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1074,
                'area_id'    => 1074,
                'locale'     => 'en',
                'name'       => 'Jeddah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1075,
                'area_id'    => 1075,
                'locale'     => 'en',
                'name'       => 'Al Ta\'if',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1076,
                'area_id'    => 1076,
                'locale'     => 'en',
                'name'       => 'Al Qunfudhah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1077,
                'area_id'    => 1077,
                'locale'     => 'en',
                'name'       => 'Al Lith',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1078,
                'area_id'    => 1078,
                'locale'     => 'en',
                'name'       => 'Rabigh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1079,
                'area_id'    => 1079,
                'locale'     => 'en',
                'name'       => 'Al Jumum',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1080,
                'area_id'    => 1080,
                'locale'     => 'en',
                'name'       => 'Khulays',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1081,
                'area_id'    => 1081,
                'locale'     => 'en',
                'name'       => 'Al Kamil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1082,
                'area_id'    => 1082,
                'locale'     => 'en',
                'name'       => 'Al Khurmah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1083,
                'area_id'    => 1083,
                'locale'     => 'en',
                'name'       => 'Ranyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1084,
                'area_id'    => 1084,
                'locale'     => 'en',
                'name'       => 'Turubah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1085,
                'area_id'    => 1085,
                'locale'     => 'en',
                'name'       => 'Madinah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1086,
                'area_id'    => 1086,
                'locale'     => 'en',
                'name'       => 'Yanbu',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1087,
                'area_id'    => 1087,
                'locale'     => 'en',
                'name'       => 'Al-`Ula',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1088,
                'area_id'    => 1088,
                'locale'     => 'en',
                'name'       => 'Mahd adh Dhahab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1089,
                'area_id'    => 1089,
                'locale'     => 'en',
                'name'       => 'Badr',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1090,
                'area_id'    => 1090,
                'locale'     => 'en',
                'name'       => ' Khaybar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1091,
                'area_id'    => 1091,
                'locale'     => 'en',
                'name'       => 'Al Henakiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1092,
                'area_id'    => 1092,
                'locale'     => 'en',
                'name'       => 'Buraydah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1093,
                'area_id'    => 1093,
                'locale'     => 'en',
                'name'       => 'Unayzah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1094,
                'area_id'    => 1094,
                'locale'     => 'en',
                'name'       => 'Al Rass',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1095,
                'area_id'    => 1095,
                'locale'     => 'en',
                'name'       => 'Al Mithnab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1096,
                'area_id'    => 1096,
                'locale'     => 'en',
                'name'       => 'Al Bukayriyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1097,
                'area_id'    => 1097,
                'locale'     => 'en',
                'name'       => 'Al Badayea',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1098,
                'area_id'    => 1098,
                'locale'     => 'en',
                'name'       => 'Al Asyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1099,
                'area_id'    => 1099,
                'locale'     => 'en',
                'name'       => 'Al Nabhaniyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1100,
                'area_id'    => 1100,
                'locale'     => 'en',
                'name'       => 'Uyun Al Jiwa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1101,
                'area_id'    => 1101,
                'locale'     => 'en',
                'name'       => 'Riyadh Al Khabra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1102,
                'area_id'    => 1102,
                'locale'     => 'en',
                'name'       => 'Al Shimasiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1103,
                'area_id'    => 1103,
                'locale'     => 'en',
                'name'       => 'Al Dammam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1104,
                'area_id'    => 1104,
                'locale'     => 'en',
                'name'       => 'Al Ahsa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1105,
                'area_id'    => 1105,
                'locale'     => 'en',
                'name'       => 'Hafar Al Batin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1106,
                'area_id'    => 1106,
                'locale'     => 'en',
                'name'       => 'Jubail',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1107,
                'area_id'    => 1107,
                'locale'     => 'en',
                'name'       => 'Al Qatif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1108,
                'area_id'    => 1108,
                'locale'     => 'en',
                'name'       => 'Al Khobar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1109,
                'area_id'    => 1109,
                'locale'     => 'en',
                'name'       => 'Al Khafji',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1110,
                'area_id'    => 1110,
                'locale'     => 'en',
                'name'       => 'Ras Tanurah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1111,
                'area_id'    => 1111,
                'locale'     => 'en',
                'name'       => 'Buqayq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1112,
                'area_id'    => 1112,
                'locale'     => 'en',
                'name'       => 'Al Nairyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1113,
                'area_id'    => 1113,
                'locale'     => 'en',
                'name'       => 'Qaryat al-Ulya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1114,
                'area_id'    => 1114,
                'locale'     => 'en',
                'name'       => 'Abha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1115,
                'area_id'    => 1115,
                'locale'     => 'en',
                'name'       => 'Khamis Mushait',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1116,
                'area_id'    => 1116,
                'locale'     => 'en',
                'name'       => 'Bisha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1117,
                'area_id'    => 1117,
                'locale'     => 'en',
                'name'       => 'Al Namas',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1118,
                'area_id'    => 1118,
                'locale'     => 'en',
                'name'       => 'Muhayil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1119,
                'area_id'    => 1119,
                'locale'     => 'en',
                'name'       => 'Sarat Abidah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1120,
                'area_id'    => 1120,
                'locale'     => 'en',
                'name'       => 'Tathlith',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1121,
                'area_id'    => 1121,
                'locale'     => 'en',
                'name'       => 'Rojal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1122,
                'area_id'    => 1122,
                'locale'     => 'en',
                'name'       => 'Ahad Rafidah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1123,
                'area_id'    => 1123,
                'locale'     => 'en',
                'name'       => 'Dhahran Al Janub',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1124,
                'area_id'    => 1124,
                'locale'     => 'en',
                'name'       => 'Balqarn',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1125,
                'area_id'    => 1125,
                'locale'     => 'en',
                'name'       => 'Al Majaridah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1126,
                'area_id'    => 1126,
                'locale'     => 'en',
                'name'       => 'Tabuk',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1127,
                'area_id'    => 1127,
                'locale'     => 'en',
                'name'       => 'Al Wajh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1128,
                'area_id'    => 1128,
                'locale'     => 'en',
                'name'       => 'Duba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1129,
                'area_id'    => 1129,
                'locale'     => 'en',
                'name'       => 'Tayma',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1130,
                'area_id'    => 1130,
                'locale'     => 'en',
                'name'       => 'Umluj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1131,
                'area_id'    => 1131,
                'locale'     => 'en',
                'name'       => 'Haql',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1132,
                'area_id'    => 1132,
                'locale'     => 'en',
                'name'       => 'Ha\'il',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1133,
                'area_id'    => 1133,
                'locale'     => 'en',
                'name'       => 'Baqaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1134,
                'area_id'    => 1134,
                'locale'     => 'en',
                'name'       => 'Haet',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1135,
                'area_id'    => 1135,
                'locale'     => 'en',
                'name'       => 'Al Shinan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1136,
                'area_id'    => 1136,
                'locale'     => 'en',
                'name'       => 'Ar\'ar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1137,
                'area_id'    => 1137,
                'locale'     => 'en',
                'name'       => 'Rafha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1138,
                'area_id'    => 1138,
                'locale'     => 'en',
                'name'       => 'Turaif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1139,
                'area_id'    => 1139,
                'locale'     => 'en',
                'name'       => 'Jizan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1140,
                'area_id'    => 1140,
                'locale'     => 'en',
                'name'       => 'Sabya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1141,
                'area_id'    => 1141,
                'locale'     => 'en',
                'name'       => 'Abu `Arish',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1142,
                'area_id'    => 1142,
                'locale'     => 'en',
                'name'       => 'Samtah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1143,
                'area_id'    => 1143,
                'locale'     => 'en',
                'name'       => 'Al Harth',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1144,
                'area_id'    => 1144,
                'locale'     => 'en',
                'name'       => 'Damad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1145,
                'area_id'    => 1145,
                'locale'     => 'en',
                'name'       => 'Al Reeth',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1146,
                'area_id'    => 1146,
                'locale'     => 'en',
                'name'       => 'Baish',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1147,
                'area_id'    => 1147,
                'locale'     => 'en',
                'name'       => 'Farasan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1148,
                'area_id'    => 1148,
                'locale'     => 'en',
                'name'       => 'Al Dayer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1149,
                'area_id'    => 1149,
                'locale'     => 'en',
                'name'       => 'Ahad Al Masarihah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1150,
                'area_id'    => 1150,
                'locale'     => 'en',
                'name'       => 'Al Edabi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1151,
                'area_id'    => 1151,
                'locale'     => 'en',
                'name'       => 'Al Aridhah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1152,
                'area_id'    => 1152,
                'locale'     => 'en',
                'name'       => 'Al Darb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1153,
                'area_id'    => 1153,
                'locale'     => 'en',
                'name'       => 'Najran',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1154,
                'area_id'    => 1154,
                'locale'     => 'en',
                'name'       => 'Sharurah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1155,
                'area_id'    => 1155,
                'locale'     => 'en',
                'name'       => 'Hubuna',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1156,
                'area_id'    => 1156,
                'locale'     => 'en',
                'name'       => 'Badr Al Janub',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1157,
                'area_id'    => 1157,
                'locale'     => 'en',
                'name'       => 'Yadamah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1158,
                'area_id'    => 1158,
                'locale'     => 'en',
                'name'       => 'Thar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1159,
                'area_id'    => 1159,
                'locale'     => 'en',
                'name'       => 'Khubash',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1160,
                'area_id'    => 1160,
                'locale'     => 'en',
                'name'       => 'Al Kharkhir',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1161,
                'area_id'    => 1161,
                'locale'     => 'en',
                'name'       => 'Al Bahah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1162,
                'area_id'    => 1162,
                'locale'     => 'en',
                'name'       => 'Baljurashi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1163,
                'area_id'    => 1163,
                'locale'     => 'en',
                'name'       => 'Al Mandaq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1164,
                'area_id'    => 1164,
                'locale'     => 'en',
                'name'       => 'Al Makhwah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1165,
                'area_id'    => 1165,
                'locale'     => 'en',
                'name'       => 'Al Aqiq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1166,
                'area_id'    => 1166,
                'locale'     => 'en',
                'name'       => 'Qilwah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1167,
                'area_id'    => 1167,
                'locale'     => 'en',
                'name'       => 'Al Qara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1168,
                'area_id'    => 1168,
                'locale'     => 'en',
                'name'       => 'Sakakah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1169,
                'area_id'    => 1169,
                'locale'     => 'en',
                'name'       => 'Qurayyat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1170,
                'area_id'    => 1170,
                'locale'     => 'en',
                'name'       => 'Dumat Al-Jandal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
