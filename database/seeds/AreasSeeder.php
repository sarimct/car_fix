<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
                'id'         => 1,
                'city_id'    => 1,
                //'name'       => 'Abu Hail',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 2,
                'city_id'    => 1,
                //'name'       => 'Academic City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 3,
                'city_id'    => 1,
                //'name'       => 'Al Awir',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 4,
                'city_id'    => 1,
                //'name'       => 'Al Bada\'a',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 5,
                'city_id'    => 1,
                //'name'       => 'Al Baraha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 6,
                'city_id'    => 1,
                //'name'       => 'Al Barari',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 7,
                'city_id'    => 1,
                //'name'       => 'Al Barsha 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 8,
                'city_id'    => 1,
                //'name'       => 'Al Barsha 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 9,
                'city_id'    => 1,
                //'name'       => 'Al Barsha 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 10,
                'city_id'    => 1,
                //'name'       => 'Al Barsha South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 11,
                'city_id'    => 1,
                //'name'       => 'Al Buteen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 12,
                'city_id'    => 1,
                //'name'       => 'Al Dhagaya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 13,
                'city_id'    => 1,
                //'name'       => 'Al Furjan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 14,
                'city_id'    => 1,
                //'name'       => 'Al Garhoud',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 15,
                'city_id'    => 1,
                //'name'       => 'Al Hamriya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 16,
                'city_id'    => 1,
                //'name'       => 'Al Hudaiba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 17,
                'city_id'    => 1,
                //'name'       => 'Al Jaddaf',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 18,
                'city_id'    => 1,
                //'name'       => 'Al Jaffiliya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 19,
                'city_id'    => 1,
                //'name'       => 'Al Karama',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 20,
                'city_id'    => 1,
                //'name'       => 'Al Khabaisi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 21,
                'city_id'    => 1,
                //'name'       => 'Al Khawaneej 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 22,
                'city_id'    => 1,
                //'name'       => 'Al Khawaneej 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 23,
                'city_id'    => 1,
                //'name'       => 'Al Kifaf',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 24,
                'city_id'    => 1,
                //'name'       => 'Al Mamzar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 25,
                'city_id'    => 1,
                //'name'       => 'Al Manara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 26,
                'city_id'    => 1,
                //'name'       => 'Al Mankhool',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 27,
                'city_id'    => 1,
                //'name'       => 'Al Merkad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 28,
                'city_id'    => 1,
                //'name'       => 'Al Mina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 29,
                'city_id'    => 1,
                //'name'       => 'Al Mizhar 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 30,
                'city_id'    => 1,
                //'name'       => 'Al Mizhar 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 31,
                'city_id'    => 1,
                //'name'       => 'Al Muraqqabat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 32,
                'city_id'    => 1,
                //'name'       => 'Al Murar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 33,
                'city_id'    => 1,
                //'name'       => 'Al Mushrif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 34,
                'city_id'    => 1,
                //'name'       => 'Al Muteena',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 35,
                'city_id'    => 1,
                //'name'       => 'Al Nahda 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 36,
                'city_id'    => 1,
                //'name'       => 'Al Nahda 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 37,
                'city_id'    => 1,
                //'name'       => 'Al Quoz 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 38,
                'city_id'    => 1,
                //'name'       => 'Al Quoz 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 39,
                'city_id'    => 1,
                //'name'       => 'Al Quoz 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 40,
                'city_id'    => 1,
                //'name'       => 'Al Quoz 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 41,
                'city_id'    => 1,
                //'name'       => 'Al Quoz Industrial Area 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 42,
                'city_id'    => 1,
                //'name'       => 'Al Quoz Industrial Area 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 43,
                'city_id'    => 1,
                //'name'       => 'Al Quoz Industrial Area 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 44,
                'city_id'    => 1,
                //'name'       => 'Al Quoz Industrial Area 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 45,
                'city_id'    => 1,
                //'name'       => 'Al Qusais 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 46,
                'city_id'    => 1,
                //'name'       => 'Al Qusais 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 47,
                'city_id'    => 1,
                //'name'       => 'Al Qusais 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 48,
                'city_id'    => 1,
                //'name'       => 'Al Qusais Industrial Area 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 49,
                'city_id'    => 1,
                //'name'       => 'Al Qusais Industrial Area 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 50,
                'city_id'    => 1,
                //'name'       => 'Al Qusais Industrial Area 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 51,
                'city_id'    => 1,
                //'name'       => 'Al Qusais Industrial Area 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 52,
                'city_id'    => 1,
                //'name'       => 'Al Qusais Industrial Area 5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 53,
                'city_id'    => 1,
                //'name'       => 'Al Raffa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 54,
                'city_id'    => 1,
                //'name'       => 'Al Ras',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 55,
                'city_id'    => 1,
                //'name'       => 'Al Rashidiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 56,
                'city_id'    => 1,
                //'name'       => 'Al Rigga',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 57,
                'city_id'    => 1,
                //'name'       => 'Al Sabkha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 58,
                'city_id'    => 1,
                //'name'       => 'Al Safa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 59,
                'city_id'    => 1,
                //'name'       => 'Al Safa 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 60,
                'city_id'    => 1,
                //'name'       => 'Al Satwa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 61,
                'city_id'    => 1,
                //'name'       => 'Al Shindagha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 62,
                'city_id'    => 1,
                //'name'       => 'Al Souq Al Kabeer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 63,
                'city_id'    => 1,
                //'name'       => 'Al Sufouh 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 64,
                'city_id'    => 1,
                //'name'       => 'Al Sufouh 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 65,
                'city_id'    => 1,
                //'name'       => 'Al Twar 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 66,
                'city_id'    => 1,
                //'name'       => 'Al Twar 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 67,
                'city_id'    => 1,
                //'name'       => 'Al Twar 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 68,
                'city_id'    => 1,
                //'name'       => 'Al Waheda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 69,
                'city_id'    => 1,
                //'name'       => 'Al Warqa 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 70,
                'city_id'    => 1,
                //'name'       => 'Al Warqa 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 71,
                'city_id'    => 1,
                //'name'       => 'Al Warqa 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 72,
                'city_id'    => 1,
                //'name'       => 'Al Warqa 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 73,
                'city_id'    => 1,
                //'name'       => 'Al Warqa 5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 74,
                'city_id'    => 1,
                //'name'       => 'Al Wasl',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 75,
                'city_id'    => 1,
                //'name'       => 'Arabian Ranches',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 76,
                'city_id'    => 1,
                //'name'       => 'Arabian Ranches 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 77,
                'city_id'    => 1,
                //'name'       => 'Barsha Heights - TECOM',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 78,
                'city_id'    => 1,
                //'name'       => 'Bukadra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 79,
                'city_id'    => 1,
                //'name'       => 'Business Bay',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 80,
                'city_id'    => 1,
                //'name'       => 'Corniche Deira',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 81,
                'city_id'    => 1,
                //'name'       => 'DIFC',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 82,
                'city_id'    => 1,
                //'name'       => 'Discovery Gardens',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 83,
                'city_id'    => 1,
                //'name'       => 'Downtown Burj Khalifa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 84,
                'city_id'    => 1,
                //'name'       => 'Downtown Jabel Ali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 85,
                'city_id'    => 1,
                //'name'       => 'Dubai Airport Freezone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 86,
                'city_id'    => 1,
                //'name'       => 'Dubai Cargo Village',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 87,
                'city_id'    => 1,
                //'name'       => 'Dubai Design District',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 88,
                'city_id'    => 1,
                //'name'       => 'Dubai Falcon City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 89,
                'city_id'    => 1,
                //'name'       => 'Dubai Festival City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 90,
                'city_id'    => 1,
                //'name'       => 'Dubai Healthcare City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 91,
                'city_id'    => 1,
                //'name'       => 'Dubai International Airport',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 92,
                'city_id'    => 1,
                //'name'       => 'Dubai Internet City - DIC',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 93,
                'city_id'    => 1,
                //'name'       => 'Dubai Investments Park 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 94,
                'city_id'    => 1,
                //'name'       => 'Dubai Investments Park 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 95,
                'city_id'    => 1,
                //'name'       => 'Dubai Marina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 96,
                'city_id'    => 1,
                //'name'       => 'Dubai Maritime City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 97,
                'city_id'    => 1,
                //'name'       => 'Dubai Media City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 98,
                'city_id'    => 1,
                //'name'       => 'Dubai Motor City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 99,
                'city_id'    => 1,
                //'name'       => 'Dubai Silicon Oasis',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 100,
                'city_id'    => 1,
                //'name'       => 'Dubai Sports City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 101,
                'city_id'    => 1,
                //'name'       => 'Dubai Studio City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 102,
                'city_id'    => 1,
                //'name'       => 'Dubai Techno Park',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 103,
                'city_id'    => 1,
                //'name'       => 'Dubai World Central - DWC',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 104,
                'city_id'    => 1,
                //'name'       => 'Dubai World Trade Center - DWTC',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 105,
                'city_id'    => 1,
                //'name'       => 'Emirates Hills',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 106,
                'city_id'    => 1,
                //'name'       => 'Gardens',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 107,
                'city_id'    => 1,
                //'name'       => 'Global Village',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 108,
                'city_id'    => 1,
                //'name'       => 'Green Community Motor City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 109,
                'city_id'    => 1,
                //'name'       => 'Hor Al Anz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 110,
                'city_id'    => 1,
                //'name'       => 'Hor Al Anz East',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 111,
                'city_id'    => 1,
                //'name'       => 'Ibn Batutta Mall',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 112,
                'city_id'    => 1,
                //'name'       => 'IMPZ',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 113,
                'city_id'    => 1,
                //'name'       => 'International City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 114,
                'city_id'    => 1,
                //'name'       => 'Jebel Ali 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 115,
                'city_id'    => 1,
                //'name'       => 'Jebel Ali 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 116,
                'city_id'    => 1,
                //'name'       => 'Jebel Ali Freezone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 117,
                'city_id'    => 1,
                //'name'       => 'Jebel Ali Freezone Extension',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 118,
                'city_id'    => 1,
                //'name'       => 'Jebel Ali Industrial Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 119,
                'city_id'    => 1,
                //'name'       => 'Jumeirah 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 120,
                'city_id'    => 1,
                //'name'       => 'Jumeirah 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 121,
                'city_id'    => 1,
                //'name'       => 'Jumeirah 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 122,
                'city_id'    => 1,
                //'name'       => 'Jumeirah Beach Residence - JBR',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 123,
                'city_id'    => 1,
                //'name'       => 'Jumeirah Golf Estates',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 124,
                'city_id'    => 1,
                //'name'       => 'Jumeirah Islands',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 125,
                'city_id'    => 1,
                //'name'       => 'Jumeirah Lakes Towers - JLT',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 126,
                'city_id'    => 1,
                //'name'       => 'Jumeirah Park',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 127,
                'city_id'    => 1,
                //'name'       => 'Jumeirah Village Circle - JVC',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 128,
                'city_id'    => 1,
                //'name'       => 'Jumeirah Village Triangle - JVT',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 129,
                'city_id'    => 1,
                //'name'       => 'Knowledge Village',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 130,
                'city_id'    => 1,
                //'name'       => 'Layan Community',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 131,
                'city_id'    => 1,
                //'name'       => 'Liwan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 132,
                'city_id'    => 1,
                //'name'       => 'Meadows',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 133,
                'city_id'    => 1,
                //'name'       => 'Meydan South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 134,
                'city_id'    => 1,
                //'name'       => 'Mira Community',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 135,
                'city_id'    => 1,
                //'name'       => 'Mirdif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 136,
                'city_id'    => 1,
                //'name'       => 'Mudon',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 137,
                'city_id'    => 1,
                //'name'       => 'Muhaisnah 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 138,
                'city_id'    => 1,
                //'name'       => 'Muhaisnah 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 139,
                'city_id'    => 1,
                //'name'       => 'Muhaisnah 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 140,
                'city_id'    => 1,
                //'name'       => 'Muhaisnah 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 141,
                'city_id'    => 1,
                //'name'       => 'Nad Al Sheba 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 142,
                'city_id'    => 1,
                //'name'       => 'Nad Al Sheba 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 143,
                'city_id'    => 1,
                //'name'       => 'Nad Al Sheba 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 144,
                'city_id'    => 1,
                //'name'       => 'Nad Al Sheba 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 145,
                'city_id'    => 1,
                //'name'       => 'Nadd Al Hamar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 146,
                'city_id'    => 1,
                //'name'       => 'Nadd Al Shamma',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 147,
                'city_id'    => 1,
                //'name'       => 'Naif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 148,
                'city_id'    => 1,
                //'name'       => 'Oud Al Muteena',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 149,
                'city_id'    => 1,
                //'name'       => 'Oud Metha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 150,
                'city_id'    => 1,
                //'name'       => 'Port Rashid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 151,
                'city_id'    => 1,
                //'name'       => 'Port Saeed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 152,
                'city_id'    => 1,
                //'name'       => 'Ras Al Khor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 153,
                'city_id'    => 1,
                //'name'       => 'Ras Al Khor Indsutrial Area 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 154,
                'city_id'    => 1,
                //'name'       => 'Ras Al Khor Indsutrial Area 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 155,
                'city_id'    => 1,
                //'name'       => 'Ras Al Khor Indsutrial Area 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 156,
                'city_id'    => 1,
                //'name'       => 'Remraam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 157,
                'city_id'    => 1,
                //'name'       => 'Rigga Al Buteen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 158,
                'city_id'    => 1,
                //'name'       => 'Springs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 159,
                'city_id'    => 1,
                //'name'       => 'The Greens',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 160,
                'city_id'    => 1,
                //'name'       => 'The Lakes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 161,
                'city_id'    => 1,
                //'name'       => 'The Palm Deira',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 162,
                'city_id'    => 1,
                //'name'       => 'The Palm Jebel Ali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 163,
                'city_id'    => 1,
                //'name'       => 'The Palm Jumeirah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 164,
                'city_id'    => 1,
                //'name'       => 'The Skycourts',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 165,
                'city_id'    => 1,
                //'name'       => 'The Sustainable City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 166,
                'city_id'    => 1,
                //'name'       => 'The Villa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 167,
                'city_id'    => 1,
                //'name'       => 'Um Al Sheif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 168,
                'city_id'    => 1,
                //'name'       => 'Umm Hurair 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 169,
                'city_id'    => 1,
                //'name'       => 'Umm Hurair 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 170,
                'city_id'    => 1,
                //'name'       => 'Umm Ramool',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 171,
                'city_id'    => 1,
                //'name'       => 'Umm Suqeim 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 172,
                'city_id'    => 1,
                //'name'       => 'Umm Suqeim 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 173,
                'city_id'    => 1,
                //'name'       => 'Umm Suqeim 2 Beach',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 174,
                'city_id'    => 1,
                //'name'       => 'Umm Suqeim 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 175,
                'city_id'    => 1,
                //'name'       => 'Wadi Alamardi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 176,
                'city_id'    => 1,
                //'name'       => 'Warsan 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 177,
                'city_id'    => 1,
                //'name'       => 'Warsan 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 178,
                'city_id'    => 1,
                //'name'       => 'Waterfront',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 179,
                'city_id'    => 1,
                //'name'       => 'Za\'abeel 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 180,
                'city_id'    => 1,
                //'name'       => 'Za\'abeel 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 181,
                'city_id'    => 2,
                //'name'       => 'Al Adla',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 182,
                'city_id'    => 2,
                //'name'       => 'Al Aman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 183,
                'city_id'    => 2,
                //'name'       => 'Al Bahya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 184,
                'city_id'    => 2,
                //'name'       => 'Al Bandar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 185,
                'city_id'    => 2,
                //'name'       => 'Al Dafrah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 186,
                'city_id'    => 2,
                //'name'       => 'Al Etihad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 187,
                'city_id'    => 2,
                //'name'       => 'Al Falah City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 188,
                'city_id'    => 2,
                //'name'       => 'Al Hosn',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 189,
                'city_id'    => 2,
                //'name'       => 'Al Karamah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 190,
                'city_id'    => 2,
                //'name'       => 'Al Khalidiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 191,
                'city_id'    => 2,
                //'name'       => 'Al Khubeirah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 192,
                'city_id'    => 2,
                //'name'       => 'Al Mafraq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 193,
                'city_id'    => 2,
                //'name'       => 'Al Manhal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 194,
                'city_id'    => 2,
                //'name'       => 'Al Maqta',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 195,
                'city_id'    => 2,
                //'name'       => 'Al Markaziyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 196,
                'city_id'    => 2,
                //'name'       => 'Al Markaziyah West',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 197,
                'city_id'    => 2,
                //'name'       => 'Al Maryah Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 198,
                'city_id'    => 2,
                //'name'       => 'Al Mina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 199,
                'city_id'    => 2,
                //'name'       => 'Al Muneera',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 200,
                'city_id'    => 2,
                //'name'       => 'Al Muntazah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 201,
                'city_id'    => 2,
                //'name'       => 'Al Musalla',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 202,
                'city_id'    => 2,
                //'name'       => 'Al Mushrif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 203,
                'city_id'    => 2,
                //'name'       => 'Al Muzoon',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 204,
                'city_id'    => 2,
                //'name'       => 'Al Nahyan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 205,
                'city_id'    => 2,
                //'name'       => 'Al Raha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 206,
                'city_id'    => 2,
                //'name'       => 'Al Rahba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 207,
                'city_id'    => 2,
                //'name'       => 'Al Ras Al Akhdar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 208,
                'city_id'    => 2,
                //'name'       => 'Al Reef',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 209,
                'city_id'    => 2,
                //'name'       => 'Al Rowdah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 210,
                'city_id'    => 2,
                //'name'       => 'Al Safarrat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 211,
                'city_id'    => 2,
                //'name'       => 'Al Samha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 212,
                'city_id'    => 2,
                //'name'       => 'Al Shamkha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 213,
                'city_id'    => 2,
                //'name'       => 'Al Shawamekh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 214,
                'city_id'    => 2,
                //'name'       => 'Al Wahdah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 215,
                'city_id'    => 2,
                //'name'       => 'Al Wathba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 216,
                'city_id'    => 2,
                //'name'       => 'Al Zaab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 217,
                'city_id'    => 2,
                //'name'       => 'Al Zafranah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 218,
                'city_id'    => 2,
                //'name'       => 'Al Zahraa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 219,
                'city_id'    => 2,
                //'name'       => 'Al Zeina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 220,
                'city_id'    => 2,
                //'name'       => 'Bain Al Jesrain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 221,
                'city_id'    => 2,
                //'name'       => 'Bani Yas',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 222,
                'city_id'    => 2,
                //'name'       => 'Belghailam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 223,
                'city_id'    => 2,
                //'name'       => 'BreakWater',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 224,
                'city_id'    => 2,
                //'name'       => 'Capital Centre',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 225,
                'city_id'    => 2,
                //'name'       => 'Dhow Harbour',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 226,
                'city_id'    => 2,
                //'name'       => 'Hydra City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 227,
                'city_id'    => 2,
                //'name'       => 'Khor Al Bateen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 228,
                'city_id'    => 2,
                //'name'       => 'Lulu Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 229,
                'city_id'    => 2,
                //'name'       => 'Madinat Khalifa - A',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 230,
                'city_id'    => 2,
                //'name'       => 'Madinat Khalifa - B',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 231,
                'city_id'    => 2,
                //'name'       => 'Madinat Khalifa - C',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 232,
                'city_id'    => 2,
                //'name'       => 'Madinat Zayed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 233,
                'city_id'    => 2,
                //'name'       => 'Masdar City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 234,
                'city_id'    => 2,
                //'name'       => 'Mohammed Bin Zayed City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 235,
                'city_id'    => 2,
                //'name'       => 'Mussafah Industrial city',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 236,
                'city_id'    => 2,
                //'name'       => 'New Shahama',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 237,
                'city_id'    => 2,
                //'name'       => 'Port Zayed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 238,
                'city_id'    => 2,
                //'name'       => 'Qasr El Bahr',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 239,
                'city_id'    => 2,
                //'name'       => 'Qasr El Shantie',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 240,
                'city_id'    => 2,
                //'name'       => 'Reem Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 241,
                'city_id'    => 2,
                //'name'       => 'Saadiyat Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 242,
                'city_id'    => 2,
                //'name'       => 'Sas Al Nakhl Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 243,
                'city_id'    => 2,
                //'name'       => 'Shahama',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 244,
                'city_id'    => 2,
                //'name'       => 'Tourist Club Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 245,
                'city_id'    => 2,
                //'name'       => 'Yas Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 246,
                'city_id'    => 2,
                //'name'       => 'Zayed Sports City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 247,
                'city_id'    => 3,
                //'name'       => 'Abu Shagara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 248,
                'city_id'    => 3,
                //'name'       => 'Al Muntazah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 249,
                'city_id'    => 3,
                //'name'       => 'Al Abar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 250,
                'city_id'    => 3,
                //'name'       => 'Al Azra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 251,
                'city_id'    => 3,
                //'name'       => 'Al Bataeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 252,
                'city_id'    => 3,
                //'name'       => 'Al Darari',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 253,
                'city_id'    => 3,
                //'name'       => 'Al Dhaid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 254,
                'city_id'    => 3,
                //'name'       => 'Al Elyash',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 255,
                'city_id'    => 3,
                //'name'       => 'Al Falaj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 256,
                'city_id'    => 3,
                //'name'       => 'Al Fayha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 257,
                'city_id'    => 3,
                //'name'       => 'Al Fisht',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 258,
                'city_id'    => 3,
                //'name'       => 'Al Ghaphia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 259,
                'city_id'    => 3,
                //'name'       => 'Al Gharayen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 260,
                'city_id'    => 3,
                //'name'       => 'Al Ghubaiba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 261,
                'city_id'    => 3,
                //'name'       => 'Al Ghuwair',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 262,
                'city_id'    => 3,
                //'name'       => 'Al Goaz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 263,
                'city_id'    => 3,
                //'name'       => 'Al Hazana',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 264,
                'city_id'    => 3,
                //'name'       => 'Al Homaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 265,
                'city_id'    => 3,
                //'name'       => 'Al Jazzat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 266,
                'city_id'    => 3,
                //'name'       => 'Al Jubail',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 267,
                'city_id'    => 3,
                //'name'       => 'Al Juraina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 268,
                'city_id'    => 3,
                //'name'       => 'Al Khaledia Suburb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 269,
                'city_id'    => 3,
                //'name'       => 'Al Khan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 270,
                'city_id'    => 3,
                //'name'       => 'Al Khezamia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 271,
                'city_id'    => 3,
                //'name'       => 'Al Layyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 272,
                'city_id'    => 3,
                //'name'       => 'Al Mahatta',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 273,
                'city_id'    => 3,
                //'name'       => 'Al Majaz 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 274,
                'city_id'    => 3,
                //'name'       => 'Al Majaz 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 275,
                'city_id'    => 3,
                //'name'       => 'Al Majaz 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 276,
                'city_id'    => 3,
                //'name'       => 'Al Mamzar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 277,
                'city_id'    => 3,
                //'name'       => 'Al Manakh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 278,
                'city_id'    => 3,
                //'name'       => 'Al Mansura',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 279,
                'city_id'    => 3,
                //'name'       => 'Al Mareija',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 280,
                'city_id'    => 3,
                //'name'       => 'Al Mirgab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 281,
                'city_id'    => 3,
                //'name'       => 'Al Mujarah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 282,
                'city_id'    => 3,
                //'name'       => 'Al Musalla',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 283,
                'city_id'    => 3,
                //'name'       => 'Al Nabba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 284,
                'city_id'    => 3,
                //'name'       => 'Al Nad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 285,
                'city_id'    => 3,
                //'name'       => 'Al Nahda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 286,
                'city_id'    => 3,
                //'name'       => 'Al Nasserya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 287,
                'city_id'    => 3,
                //'name'       => 'Al Nekhailat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 288,
                'city_id'    => 3,
                //'name'       => 'Al Noof',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 289,
                'city_id'    => 3,
                //'name'       => 'Al Qadisia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 290,
                'city_id'    => 3,
                //'name'       => 'Al Qasimia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 291,
                'city_id'    => 3,
                //'name'       => 'Al Qulayaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 292,
                'city_id'    => 3,
                //'name'       => 'Al Rahmania',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 293,
                'city_id'    => 3,
                //'name'       => 'Al Ramaqia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 294,
                'city_id'    => 3,
                //'name'       => 'Al Ramla East',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 295,
                'city_id'    => 3,
                //'name'       => 'Al Ramla West',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 296,
                'city_id'    => 3,
                //'name'       => 'Al Ramtha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 297,
                'city_id'    => 3,
                //'name'       => 'Al Rifah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 298,
                'city_id'    => 3,
                //'name'       => 'Al Riffa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 299,
                'city_id'    => 3,
                //'name'       => 'Al Sabkha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 300,
                'city_id'    => 3,
                //'name'       => 'Al Seef',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 301,
                'city_id'    => 3,
                //'name'       => 'Al Shahba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 302,
                'city_id'    => 3,
                //'name'       => 'Al Shuwaihen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 303,
                'city_id'    => 3,
                //'name'       => 'Al Soor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 304,
                'city_id'    => 3,
                //'name'       => 'Al Sweihat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 305,
                'city_id'    => 3,
                //'name'       => 'Al Taawun',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 306,
                'city_id'    => 3,
                //'name'       => 'Al Talaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 307,
                'city_id'    => 3,
                //'name'       => 'Al Tarfa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 308,
                'city_id'    => 3,
                //'name'       => 'Al Yarmook',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 309,
                'city_id'    => 3,
                //'name'       => 'Bu Danig',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 310,
                'city_id'    => 3,
                //'name'       => 'Bu Tina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 311,
                'city_id'    => 3,
                //'name'       => 'Dasman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 312,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 313,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 10',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 314,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 11',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 315,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 12',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 316,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 13',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 317,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 15',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 318,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 17',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 319,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 18',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 320,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 321,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 322,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 323,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 324,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 325,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 7',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 326,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 8',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 327,
                'city_id'    => 3,
                //'name'       => 'Industrial Area 9',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 328,
                'city_id'    => 3,
                //'name'       => 'Khor Fakkan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 329,
                'city_id'    => 3,
                //'name'       => 'Maysaloon',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 330,
                'city_id'    => 3,
                //'name'       => 'Muwafjah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 331,
                'city_id'    => 3,
                //'name'       => 'Muwaileh Commercial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 332,
                'city_id'    => 3,
                //'name'       => 'Rolla',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 333,
                'city_id'    => 3,
                //'name'       => 'Saif Zone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 334,
                'city_id'    => 3,
                //'name'       => 'Samnan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 335,
                'city_id'    => 3,
                //'name'       => 'Sharqan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 336,
                'city_id'    => 3,
                //'name'       => 'Um Altaraffa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 337,
                'city_id'    => 3,
                //'name'       => 'University of Sharjah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 344,
                'city_id'    => 4,
                //'name'       => 'Ajman City Center',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 345,
                'city_id'    => 4,
                //'name'       => 'Ajman Corniche',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 346,
                'city_id'    => 4,
                //'name'       => 'Ajman Free Zone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 347,
                'city_id'    => 4,
                //'name'       => 'Ajman Pearl',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 348,
                'city_id'    => 4,
                //'name'       => 'Ajman University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 349,
                'city_id'    => 4,
                //'name'       => 'Al Bustan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 350,
                'city_id'    => 4,
                //'name'       => 'Al Butain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 351,
                'city_id'    => 4,
                //'name'       => 'Al Hamidiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 352,
                'city_id'    => 4,
                //'name'       => 'Al Helio',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 353,
                'city_id'    => 4,
                //'name'       => 'Al Jurf 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 354,
                'city_id'    => 4,
                //'name'       => 'Al Jurf 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 355,
                'city_id'    => 4,
                //'name'       => 'Al Mushairef',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 356,
                'city_id'    => 4,
                //'name'       => 'Al Nakhil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 357,
                'city_id'    => 4,
                //'name'       => 'Al Nakhil 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 358,
                'city_id'    => 4,
                //'name'       => 'Al Nakhil 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 359,
                'city_id'    => 4,
                //'name'       => 'Al Nuaimia 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 360,
                'city_id'    => 4,
                //'name'       => 'Al Nuaimia 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 361,
                'city_id'    => 4,
                //'name'       => 'Al Rashidiya 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 362,
                'city_id'    => 4,
                //'name'       => 'Al Rashidiya 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 363,
                'city_id'    => 4,
                //'name'       => 'Al Rashidiya 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 364,
                'city_id'    => 4,
                //'name'       => 'Al Rumailah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 365,
                'city_id'    => 4,
                //'name'       => 'Al Zahra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 366,
                'city_id'    => 4,
                //'name'       => 'Al Zawarah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 367,
                'city_id'    => 4,
                //'name'       => 'Al Zora',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 368,
                'city_id'    => 4,
                //'name'       => 'Emirates City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 369,
                'city_id'    => 4,
                //'name'       => 'Emirates City Extension',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 370,
                'city_id'    => 4,
                //'name'       => 'Garden City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 371,
                'city_id'    => 4,
                //'name'       => 'Ittihad Village',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 372,
                'city_id'    => 4,
                //'name'       => 'Masfout',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 373,
                'city_id'    => 5,
                //'name'       => 'Abu Samrah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 374,
                'city_id'    => 5,
                //'name'       => 'Al Agabiyya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 375,
                'city_id'    => 5,
                //'name'       => 'Al Ain International Airport',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 376,
                'city_id'    => 5,
                //'name'       => 'Al Ain Mall',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 377,
                'city_id'    => 5,
                //'name'       => 'Al Ain Oasis Villas',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 378,
                'city_id'    => 5,
                //'name'       => 'Al Bateen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 379,
                'city_id'    => 5,
                //'name'       => 'Al Foaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 380,
                'city_id'    => 5,
                //'name'       => 'Al Hili',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 381,
                'city_id'    => 5,
                //'name'       => 'Al Jahili',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 382,
                'city_id'    => 5,
                //'name'       => 'Al Jimi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 383,
                'city_id'    => 5,
                //'name'       => 'Al Khabisi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 384,
                'city_id'    => 5,
                //'name'       => 'Al Maqam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 385,
                'city_id'    => 5,
                //'name'       => 'Al Marakhaniya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 386,
                'city_id'    => 5,
                //'name'       => 'Al Masoudi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 387,
                'city_id'    => 5,
                //'name'       => 'Al Murabaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 388,
                'city_id'    => 5,
                //'name'       => 'Al Mutarad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 389,
                'city_id'    => 5,
                //'name'       => 'Al Mutawaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 390,
                'city_id'    => 5,
                //'name'       => 'Al Qattara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 391,
                'city_id'    => 5,
                //'name'       => 'Al Sarooj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 392,
                'city_id'    => 5,
                //'name'       => 'Al Shabiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 393,
                'city_id'    => 5,
                //'name'       => 'Al Towayya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 394,
                'city_id'    => 5,
                //'name'       => 'Al Yahar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 395,
                'city_id'    => 5,
                //'name'       => 'Al Zakher',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 396,
                'city_id'    => 5,
                //'name'       => 'Alain Al Fiyada',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 397,
                'city_id'    => 5,
                //'name'       => 'Asharej',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 398,
                'city_id'    => 5,
                //'name'       => 'Bedda Bn Ammar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 399,
                'city_id'    => 5,
                //'name'       => 'Falaj Hazzaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 400,
                'city_id'    => 5,
                //'name'       => 'Industrial Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 401,
                'city_id'    => 5,
                //'name'       => 'Manazaf',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 402,
                'city_id'    => 5,
                //'name'       => 'Mubzara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 403,
                'city_id'    => 5,
                //'name'       => 'Neima',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 404,
                'city_id'    => 5,
                //'name'       => 'Tawam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 405,
                'city_id'    => 5,
                //'name'       => 'UAE University 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 406,
                'city_id'    => 5,
                //'name'       => 'UAE University 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 407,
                'city_id'    => 6,
                //'name'       => 'Al Bedia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 408,
                'city_id'    => 6,
                //'name'       => 'Al Buthna',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 409,
                'city_id'    => 6,
                //'name'       => 'Al Farfar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 410,
                'city_id'    => 6,
                //'name'       => 'Al Faseel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 411,
                'city_id'    => 6,
                //'name'       => 'Al Gurfa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 412,
                'city_id'    => 6,
                //'name'       => 'Al Hala',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 413,
                'city_id'    => 6,
                //'name'       => 'Al Heel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 414,
                'city_id'    => 6,
                //'name'       => 'Al Ittihad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 415,
                'city_id'    => 6,
                //'name'       => 'Al Mahatta',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 416,
                'city_id'    => 6,
                //'name'       => 'Al Owaid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 417,
                'city_id'    => 6,
                //'name'       => 'Al Taween',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 418,
                'city_id'    => 6,
                //'name'       => 'Albeledah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 419,
                'city_id'    => 6,
                //'name'       => 'Anajaimat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 420,
                'city_id'    => 6,
                //'name'       => 'Awhala',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 421,
                'city_id'    => 6,
                //'name'       => 'Daba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 422,
                'city_id'    => 6,
                //'name'       => 'Dedna',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 423,
                'city_id'    => 6,
                //'name'       => 'Fujairah Free Trade Zone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 424,
                'city_id'    => 6,
                //'name'       => 'Fujairah Intl Airport',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 425,
                'city_id'    => 6,
                //'name'       => 'Fujairah Port',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 426,
                'city_id'    => 6,
                //'name'       => 'Halefaath',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 427,
                'city_id'    => 6,
                //'name'       => 'Industrial Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 428,
                'city_id'    => 6,
                //'name'       => 'Madhab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 429,
                'city_id'    => 6,
                //'name'       => 'Masafi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 430,
                'city_id'    => 6,
                //'name'       => 'Merashid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 431,
                'city_id'    => 6,
                //'name'       => 'Mirbah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 432,
                'city_id'    => 6,
                //'name'       => 'Old Fujairah City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 433,
                'city_id'    => 6,
                //'name'       => 'Rughaylat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 434,
                'city_id'    => 6,
                //'name'       => 'Rumailah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 435,
                'city_id'    => 6,
                //'name'       => 'Sakamkam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 436,
                'city_id'    => 6,
                //'name'       => 'Sharm',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 437,
                'city_id'    => 7,
                //'name'       => 'Al Aahad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 438,
                'city_id'    => 7,
                //'name'       => 'Al Abrab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 439,
                'city_id'    => 7,
                //'name'       => 'Al Dar Al Baidah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 440,
                'city_id'    => 7,
                //'name'       => 'Al Haditha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 441,
                'city_id'    => 7,
                //'name'       => 'Al Hawiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 442,
                'city_id'    => 7,
                //'name'       => 'Al Humrah - A',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 443,
                'city_id'    => 7,
                //'name'       => 'Al Humrah - B',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 444,
                'city_id'    => 7,
                //'name'       => 'Al Humrah - C',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 445,
                'city_id'    => 7,
                //'name'       => 'Al Humrah - D',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 446,
                'city_id'    => 7,
                //'name'       => 'Al Khor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 447,
                'city_id'    => 7,
                //'name'       => 'Al Limgadhar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 448,
                'city_id'    => 7,
                //'name'       => 'Al Maidan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 449,
                'city_id'    => 7,
                //'name'       => 'Al Raas - A',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 450,
                'city_id'    => 7,
                //'name'       => 'Al Raas - B',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 451,
                'city_id'    => 7,
                //'name'       => 'Al Raas - C',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 452,
                'city_id'    => 7,
                //'name'       => 'Al Ramlah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 453,
                'city_id'    => 7,
                //'name'       => 'Al Raudah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 454,
                'city_id'    => 7,
                //'name'       => 'Al Riqqah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 455,
                'city_id'    => 7,
                //'name'       => 'Al Salamah - A',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 456,
                'city_id'    => 7,
                //'name'       => 'Al Salamah - B',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 457,
                'city_id'    => 7,
                //'name'       => 'Al Salamah - C',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 458,
                'city_id'    => 7,
                //'name'       => 'Defence Camp',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 459,
                'city_id'    => 7,
                //'name'       => 'Green Belt',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 460,
                'city_id'    => 7,
                //'name'       => 'Industrial Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 461,
                'city_id'    => 7,
                //'name'       => 'Old Town Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 462,
                'city_id'    => 7,
                //'name'       => 'Umm Al Quwain Marina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 463,
                'city_id'    => 7,
                //'name'       => 'search cuisine',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 465,
                'city_id'    => 7,
                //'name'       => 'Payment Icons',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 469,
                'city_id'    => 8,
                //'name'       => 'Al Dhait North',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 470,
                'city_id'    => 8,
                //'name'       => 'Al Dhait South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 471,
                'city_id'    => 8,
                //'name'       => 'Al Hamra Free Zone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 472,
                'city_id'    => 8,
                //'name'       => 'Al Hamra Industrial Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 473,
                'city_id'    => 8,
                //'name'       => 'Al Hamra Village',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 474,
                'city_id'    => 8,
                //'name'       => 'Al Jazeerah Al Hamra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 475,
                'city_id'    => 8,
                //'name'       => 'Al Jesser Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 476,
                'city_id'    => 8,
                //'name'       => 'Al Juwais Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 477,
                'city_id'    => 8,
                //'name'       => 'Al Mairid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 478,
                'city_id'    => 8,
                //'name'       => 'Al Marjan Island',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 479,
                'city_id'    => 8,
                //'name'       => 'Al Nakheel Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 480,
                'city_id'    => 8,
                //'name'       => 'Al Uraibi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 481,
                'city_id'    => 8,
                //'name'       => 'Burairaat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 482,
                'city_id'    => 8,
                //'name'       => 'Dafan Al Khor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 483,
                'city_id'    => 8,
                //'name'       => 'Dafan Al Nakheel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 484,
                'city_id'    => 8,
                //'name'       => 'Digdagga',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 485,
                'city_id'    => 8,
                //'name'       => 'Ghalilah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 486,
                'city_id'    => 8,
                //'name'       => 'Hamrania',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 487,
                'city_id'    => 8,
                //'name'       => 'Khatt',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 488,
                'city_id'    => 8,
                //'name'       => 'Khazam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 489,
                'city_id'    => 8,
                //'name'       => 'Mamoora',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 490,
                'city_id'    => 8,
                //'name'       => 'Mina Al arab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 491,
                'city_id'    => 8,
                //'name'       => 'Rams',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 492,
                'city_id'    => 8,
                //'name'       => 'Ras Al Selaab Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 493,
                'city_id'    => 8,
                //'name'       => 'Refa`ah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 494,
                'city_id'    => 8,
                //'name'       => 'Seih Al Araibi Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 495,
                'city_id'    => 8,
                //'name'       => 'Shareesha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 496,
                'city_id'    => 8,
                //'name'       => 'Sidroh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 497,
                'city_id'    => 8,
                //'name'       => 'Suhaim Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 498,
                'city_id'    => 9,
                //'name'       => 'Abdullah Al-Salem',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 499,
                'city_id'    => 9,
                //'name'       => 'Adailiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 500,
                'city_id'    => 9,
                //'name'       => 'Bneid Al Qar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 501,
                'city_id'    => 9,
                //'name'       => 'Daiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 502,
                'city_id'    => 9,
                //'name'       => 'Dasma',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 503,
                'city_id'    => 9,
                //'name'       => 'Dasman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 504,
                'city_id'    => 9,
                //'name'       => 'Doha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 505,
                'city_id'    => 9,
                //'name'       => 'Faiha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 506,
                'city_id'    => 9,
                //'name'       => 'Ghornata',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 507,
                'city_id'    => 9,
                //'name'       => 'Jaber Al Ahmed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 508,
                'city_id'    => 9,
                //'name'       => 'Kaifan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 509,
                'city_id'    => 9,
                //'name'       => 'Khaldiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 510,
                'city_id'    => 9,
                //'name'       => 'Kuwait City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'id'         => 511,
                'city_id'    => 9,
                //'name'       => 'Mansouriya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 512,
                'city_id'    => 9,
                //'name'       => 'Mirqab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 513,
                'city_id'    => 9,
                //'name'       => 'Mubarakiya Camps',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 514,
                'city_id'    => 9,
                //'name'       => 'Nahda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 515,
                'city_id'    => 9,
                //'name'       => 'Nuzha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 516,
                'city_id'    => 9,
                //'name'       => 'Qadsiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 517,
                'city_id'    => 9,
                //'name'       => 'Qibla',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 518,
                'city_id'    => 9,
                //'name'       => 'Qortuba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 519,
                'city_id'    => 9,
                //'name'       => 'Rawda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 520,
                'city_id'    => 9,
                //'name'       => 'Salhiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 521,
                'city_id'    => 9,
                //'name'       => 'Shamiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 522,
                'city_id'    => 9,
                //'name'       => 'Sharq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 523,
                'city_id'    => 9,
                //'name'       => 'Shuwaikh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 524,
                'city_id'    => 9,
                //'name'       => 'Sulaibikhat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 525,
                'city_id'    => 9,
                //'name'       => 'Surra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 526,
                'city_id'    => 9,
                //'name'       => 'Yarmouk',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 527,
                'city_id'    => 10,
                //'name'       => 'Al-Bedae',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 528,
                'city_id'    => 10,
                //'name'       => 'Bayan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 529,
                'city_id'    => 10,
                //'name'       => 'Hawally',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 530,
                'city_id'    => 10,
                //'name'       => 'Hitteen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 531,
                'city_id'    => 10,
                //'name'       => 'Jabriya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 532,
                'city_id'    => 10,
                //'name'       => 'Maidan Hawally',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 533,
                'city_id'    => 10,
                //'name'       => 'Mishrif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 534,
                'city_id'    => 10,
                //'name'       => 'Mubarak Al-Abdullah - West Mishref',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 535,
                'city_id'    => 10,
                //'name'       => 'Rumaithiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 536,
                'city_id'    => 10,
                //'name'       => 'Salam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 537,
                'city_id'    => 10,
                //'name'       => 'Salmiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 538,
                'city_id'    => 10,
                //'name'       => 'Salwa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 539,
                'city_id'    => 10,
                //'name'       => 'Shaab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 540,
                'city_id'    => 10,
                //'name'       => 'Shuhada',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 541,
                'city_id'    => 10,
                //'name'       => 'Siddiq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 542,
                'city_id'    => 10,
                //'name'       => 'Zahra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 543,
                'city_id'    => 11,
                //'name'       => 'Abbasiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 544,
                'city_id'    => 11,
                //'name'       => 'Abdullah Al-Mubarak - West Jleeb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 545,
                'city_id'    => 11,
                //'name'       => 'Abraq Khaitan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 546,
                'city_id'    => 11,
                //'name'       => 'Airport',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 547,
                'city_id'    => 11,
                //'name'       => 'Andalous',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 548,
                'city_id'    => 11,
                //'name'       => 'Ardhiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 549,
                'city_id'    => 11,
                //'name'       => 'Ardiya Small Industrial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 550,
                'city_id'    => 11,
                //'name'       => 'Ardiya Storage Zone',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 551,
                'city_id'    => 11,
                //'name'       => 'Ashbeliah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 552,
                'city_id'    => 11,
                //'name'       => 'Dhajeej',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 553,
                'city_id'    => 11,
                //'name'       => 'Exhibits - South Khaitan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 554,
                'city_id'    => 11,
                //'name'       => 'Farwaniya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 555,
                'city_id'    => 11,
                //'name'       => 'Ferdous',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 556,
                'city_id'    => 11,
                //'name'       => 'Jleeb Al-Shiyoukh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 557,
                'city_id'    => 11,
                //'name'       => 'Khaitan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 558,
                'city_id'    => 11,
                //'name'       => 'Omariya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 559,
                'city_id'    => 11,
                //'name'       => 'Rabiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 560,
                'city_id'    => 11,
                //'name'       => 'Rai',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 561,
                'city_id'    => 11,
                //'name'       => 'Reggai',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 562,
                'city_id'    => 11,
                //'name'       => 'Rehab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 563,
                'city_id'    => 11,
                //'name'       => 'Sabah Al-Nasser',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 564,
                'city_id'    => 11,
                //'name'       => 'Sheikh Saad Al Abdullah Airport',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 565,
                'city_id'    => 12,
                //'name'       => 'Abu Halifa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 566,
                'city_id'    => 12,
                //'name'       => 'Al Julayah - Az Zour Sulah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 567,
                'city_id'    => 12,
                //'name'       => 'Al-Ahmadi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 568,
                'city_id'    => 12,
                //'name'       => 'Ali Sabah Al-Salem - Umm Al Hayman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 569,
                'city_id'    => 12,
                //'name'       => 'Dhaher',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 570,
                'city_id'    => 12,
                //'name'       => 'East Al Ahmadi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 571,
                'city_id'    => 12,
                //'name'       => 'Egaila',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 572,
                'city_id'    => 12,
                //'name'       => 'Fahad Al Ahmed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 573,
                'city_id'    => 12,
                //'name'       => 'Fahaheel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 574,
                'city_id'    => 12,
                //'name'       => 'Fintas',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 575,
                'city_id'    => 12,
                //'name'       => 'Hadiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 576,
                'city_id'    => 12,
                //'name'       => 'Jaber Al Ali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 577,
                'city_id'    => 12,
                //'name'       => 'Khairan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 578,
                'city_id'    => 12,
                //'name'       => 'Magwa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 579,
                'city_id'    => 12,
                //'name'       => 'Mahboula',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 580,
                'city_id'    => 12,
                //'name'       => 'Mangaf',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 581,
                'city_id'    => 12,
                //'name'       => 'Mina Abdullah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 582,
                'city_id'    => 12,
                //'name'       => 'Mina Al Ahmadi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 583,
                'city_id'    => 12,
                //'name'       => 'Nuwaiseeb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 584,
                'city_id'    => 12,
                //'name'       => 'Riqqa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 585,
                'city_id'    => 12,
                //'name'       => 'Sabah Al Ahmad Marine City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 586,
                'city_id'    => 12,
                //'name'       => 'Sabah AL Ahmad residential',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 587,
                'city_id'    => 12,
                //'name'       => 'Sabahiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 588,
                'city_id'    => 12,
                //'name'       => 'Shuaiba Port',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 589,
                'city_id'    => 12,
                //'name'       => 'Wafra farms',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 590,
                'city_id'    => 12,
                //'name'       => 'Wafra residential',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 591,
                'city_id'    => 13,
                //'name'       => 'Al Naeem',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 592,
                'city_id'    => 13,
                //'name'       => 'Amgarah Industrial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 593,
                'city_id'    => 13,
                //'name'       => 'Jahra Area',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 594,
                'city_id'    => 13,
                //'name'       => 'Kabd',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 595,
                'city_id'    => 13,
                //'name'       => 'Nasseem',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 596,
                'city_id'    => 13,
                //'name'       => 'Oyoun',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 597,
                'city_id'    => 13,
                //'name'       => 'Qairawan - South Doha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 598,
                'city_id'    => 13,
                //'name'       => 'Qasr',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 599,
                'city_id'    => 13,
                //'name'       => 'Saad Al Abdullah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 600,
                'city_id'    => 13,
                //'name'       => 'Sulaibiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 601,
                'city_id'    => 13,
                //'name'       => 'Sulaibiya Indutrial 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 602,
                'city_id'    => 13,
                //'name'       => 'Sulaibiya Indutrial 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 603,
                'city_id'    => 13,
                //'name'       => 'Sulaibiya Residential',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 604,
                'city_id'    => 13,
                //'name'       => 'Taima',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 605,
                'city_id'    => 13,
                //'name'       => 'Waha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 606,
                'city_id'    => 14,
                //'name'       => 'Abu Ftaira',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 607,
                'city_id'    => 14,
                //'name'       => 'Abu Hasaniya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 608,
                'city_id'    => 14,
                //'name'       => 'Adan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 609,
                'city_id'    => 14,
                //'name'       => 'Al Masayel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 610,
                'city_id'    => 14,
                //'name'       => 'Al-Qurain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 611,
                'city_id'    => 14,
                //'name'       => 'Al-Qusour',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 612,
                'city_id'    => 14,
                //'name'       => 'Coast Strip B',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 613,
                'city_id'    => 14,
                //'name'       => 'Fnaitess',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 614,
                'city_id'    => 14,
                //'name'       => 'Messila',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 615,
                'city_id'    => 14,
                //'name'       => 'Mubarak Al-Kabir',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 616,
                'city_id'    => 14,
                //'name'       => 'Sabah Al-Salem',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 617,
                'city_id'    => 14,
                //'name'       => 'Sabhan Industrial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 618,
                'city_id'    => 14,
                //'name'       => 'South Wista',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 619,
                'city_id'    => 14,
                //'name'       => 'West Abu Fetera Small Indust',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 620,
                'city_id'    => 14,
                //'name'       => 'Wista',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 621,
                'city_id'    => 15,
                //'name'       => 'Al Koudh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 622,
                'city_id'    => 15,
                //'name'       => 'Al Koudh 6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 623,
                'city_id'    => 15,
                //'name'       => 'Al Mawalih North',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 624,
                'city_id'    => 15,
                //'name'       => 'Al Mawalih South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 625,
                'city_id'    => 15,
                //'name'       => 'Hail North',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 626,
                'city_id'    => 15,
                //'name'       => 'Hail South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 627,
                'city_id'    => 15,
                //'name'       => 'Hormuz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 628,
                'city_id'    => 15,
                //'name'       => 'Knowledge Oasis Muscat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 629,
                'city_id'    => 15,
                //'name'       => 'Maabela',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 630,
                'city_id'    => 15,
                //'name'       => 'Muscat Hills',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 631,
                'city_id'    => 15,
                //'name'       => 'New Airport',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 632,
                'city_id'    => 15,
                //'name'       => 'Rusayl',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 633,
                'city_id'    => 15,
                //'name'       => 'Seeb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 634,
                'city_id'    => 15,
                //'name'       => 'Sultan Qaboos University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 635,
                'city_id'    => 15,
                //'name'       => 'Suq al Seeb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 636,
                'city_id'    => 15,
                //'name'       => 'The Wave',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 637,
                'city_id'    => 16,
                //'name'       => 'Bait al falaj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 638,
                'city_id'    => 16,
                //'name'       => 'CBD',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 639,
                'city_id'    => 16,
                //'name'       => 'Darsait',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 640,
                'city_id'    => 16,
                //'name'       => 'Hamriya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 641,
                'city_id'    => 16,
                //'name'       => 'Jibrooh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 642,
                'city_id'    => 16,
                //'name'       => 'MBD',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 643,
                'city_id'    => 16,
                //'name'       => 'Muttrah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 644,
                'city_id'    => 16,
                //'name'       => 'Ruwi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 645,
                'city_id'    => 16,
                //'name'       => 'Wadi Al Kabir',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 646,
                'city_id'    => 17,
                //'name'       => 'Al Ansab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 647,
                'city_id'    => 17,
                //'name'       => 'Al Azaiba South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 648,
                'city_id'    => 17,
                //'name'       => 'Al Ghubra Ash Shamaliyyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 649,
                'city_id'    => 17,
                //'name'       => 'Al Khuwayr North',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 650,
                'city_id'    => 17,
                //'name'       => 'Al Khuwayr South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 651,
                'city_id'    => 17,
                //'name'       => 'Azaiba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 652,
                'city_id'    => 17,
                //'name'       => 'Bawshar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 653,
                'city_id'    => 17,
                //'name'       => 'Ghala',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 654,
                'city_id'    => 17,
                //'name'       => 'Ghubrah Janubiyyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 655,
                'city_id'    => 17,
                //'name'       => 'Hay Al Sarooj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 656,
                'city_id'    => 17,
                //'name'       => 'Helet El Sad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 657,
                'city_id'    => 17,
                //'name'       => 'Khuwair 33',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 658,
                'city_id'    => 17,
                //'name'       => 'Madinat Al ?Ilam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 659,
                'city_id'    => 17,
                //'name'       => 'Madinat Al Sultan Qaboos',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 660,
                'city_id'    => 17,
                //'name'       => 'Mina al Fahal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 661,
                'city_id'    => 17,
                //'name'       => 'Qurm',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 662,
                'city_id'    => 17,
                //'name'       => 'Rabia Qurum',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 663,
                'city_id'    => 17,
                //'name'       => 'Shati Al Qurm',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 664,
                'city_id'    => 17,
                //'name'       => 'Wadi Adai',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 665,
                'city_id'    => 17,
                //'name'       => 'Wattiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 666,
                'city_id'    => 18,
                //'name'       => 'Barr al Jissah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 667,
                'city_id'    => 18,
                //'name'       => 'Bustan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 668,
                'city_id'    => 18,
                //'name'       => 'Qantab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 669,
                'city_id'    => 18,
                //'name'       => 'Seefah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 670,
                'city_id'    => 18,
                //'name'       => 'Yetti',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 671,
                'city_id'    => 19,
                //'name'       => 'Al Hajar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 672,
                'city_id'    => 19,
                //'name'       => 'Amarat Phase 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 673,
                'city_id'    => 19,
                //'name'       => 'Amarat Phase 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 674,
                'city_id'    => 19,
                //'name'       => 'Amarat Phase 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 675,
                'city_id'    => 19,
                //'name'       => 'Amarat Phase 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 676,
                'city_id'    => 19,
                //'name'       => 'Amarat Phase 5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 677,
                'city_id'    => 19,
                //'name'       => 'Amirat 6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 678,
                'city_id'    => 19,
                //'name'       => 'Mahaj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 679,
                'city_id'    => 20,
                //'name'       => 'Al Awqadayn',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 680,
                'city_id'    => 20,
                //'name'       => 'Al Hafa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 681,
                'city_id'    => 20,
                //'name'       => 'Al Hasila',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 682,
                'city_id'    => 20,
                //'name'       => 'Al Hisn',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 683,
                'city_id'    => 20,
                //'name'       => 'Al Karath',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 684,
                'city_id'    => 20,
                //'name'       => 'Al Qawf',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 685,
                'city_id'    => 20,
                //'name'       => 'Al Wadi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 686,
                'city_id'    => 20,
                //'name'       => 'Ar Rubat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 687,
                'city_id'    => 20,
                //'name'       => 'Awqad Al Janubiyyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 688,
                'city_id'    => 20,
                //'name'       => 'Awqad Ash Shamaliyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 689,
                'city_id'    => 20,
                //'name'       => 'Az Zawiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 690,
                'city_id'    => 20,
                //'name'       => 'East Salalah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 691,
                'city_id'    => 20,
                //'name'       => 'Janub Ad Dahariz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 692,
                'city_id'    => 20,
                //'name'       => 'Janub Madinat As Saad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 693,
                'city_id'    => 20,
                //'name'       => 'Jarziz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 694,
                'city_id'    => 20,
                //'name'       => 'Sahnawt Al Janubiyyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 695,
                'city_id'    => 20,
                //'name'       => 'Salalah Airport (New)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 696,
                'city_id'    => 20,
                //'name'       => 'Salalah Gharbiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 697,
                'city_id'    => 20,
                //'name'       => 'Salalah Industrial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 698,
                'city_id'    => 20,
                //'name'       => 'Salalah Wosta',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 699,
                'city_id'    => 20,
                //'name'       => 'Shamal Ad Dahariz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 700,
                'city_id'    => 20,
                //'name'       => 'Shamal Madinat As Saadah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 701,
                'city_id'    => 20,
                //'name'       => 'Sudh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 702,
                'city_id'    => 20,
                //'name'       => 'Umm Al Ghawarif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 703,
                'city_id'    => 21,
                //'name'       => 'Al Hazm',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 704,
                'city_id'    => 21,
                //'name'       => 'Al Mazahit',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 705,
                'city_id'    => 21,
                //'name'       => 'Al Midayrah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 706,
                'city_id'    => 21,
                //'name'       => 'Al Wishayl',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 707,
                'city_id'    => 21,
                //'name'       => 'Falaj Al Hadees',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 708,
                'city_id'    => 22,
                //'name'       => 'Afifa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 709,
                'city_id'    => 22,
                //'name'       => 'Al Fatik',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 710,
                'city_id'    => 22,
                //'name'       => 'Al Ghushbah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 711,
                'city_id'    => 22,
                //'name'       => 'Al Hadhirah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 712,
                'city_id'    => 22,
                //'name'       => 'Al Hambar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 713,
                'city_id'    => 22,
                //'name'       => 'Al Hujrah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 714,
                'city_id'    => 22,
                //'name'       => 'Al Jufra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 715,
                'city_id'    => 22,
                //'name'       => 'Al Khuwayriyyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 716,
                'city_id'    => 22,
                //'name'       => 'Al Multaqa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 717,
                'city_id'    => 22,
                //'name'       => 'Al Uwaynat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 718,
                'city_id'    => 22,
                //'name'       => 'Al Zafraan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 719,
                'city_id'    => 22,
                //'name'       => 'As Sanqar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 720,
                'city_id'    => 22,
                //'name'       => 'As Suwayhrah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 721,
                'city_id'    => 22,
                //'name'       => 'At Turayf',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 722,
                'city_id'    => 22,
                //'name'       => 'Awtab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 723,
                'city_id'    => 22,
                //'name'       => 'Falaj Al Awhi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 724,
                'city_id'    => 22,
                //'name'       => 'Falaj Al Qabail',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 725,
                'city_id'    => 22,
                //'name'       => 'Harat Ash Shaykh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 726,
                'city_id'    => 22,
                //'name'       => 'Karwan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 727,
                'city_id'    => 22,
                //'name'       => 'Khawr Al Siyabi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 728,
                'city_id'    => 22,
                //'name'       => 'Khwar Al Hulu',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 729,
                'city_id'    => 22,
                //'name'       => 'Majan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 730,
                'city_id'    => 22,
                //'name'       => 'Majis',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 731,
                'city_id'    => 22,
                //'name'       => 'Mina Sohar (Sohar Port)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 732,
                'city_id'    => 22,
                //'name'       => 'Sallan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 733,
                'city_id'    => 22,
                //'name'       => 'Sohar Sanaiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 734,
                'city_id'    => 22,
                //'name'       => 'UMQ',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 735,
                'city_id'    => 23,
                //'name'       => 'Abu Al Nakheel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 736,
                'city_id'    => 23,
                //'name'       => 'Al Basit',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 737,
                'city_id'    => 23,
                //'name'       => 'Al Maragh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 738,
                'city_id'    => 23,
                //'name'       => 'Ar Rumays',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 739,
                'city_id'    => 23,
                //'name'       => 'Halban',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 740,
                'city_id'    => 23,
                //'name'       => 'Haradi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 741,
                'city_id'    => 23,
                //'name'       => 'Hay Al Salam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 742,
                'city_id'    => 23,
                //'name'       => 'Hayy Asim',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 743,
                'city_id'    => 23,
                //'name'       => 'Muraysi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 744,
                'city_id'    => 24,
                //'name'       => 'Bahla',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 745,
                'city_id'    => 24,
                //'name'       => 'Birkat Al Mooz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 746,
                'city_id'    => 24,
                //'name'       => 'Falaj Al Daris',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 747,
                'city_id'    => 24,
                //'name'       => 'Firq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 748,
                'city_id'    => 24,
                //'name'       => 'Hay Al Turath North',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 749,
                'city_id'    => 24,
                //'name'       => 'Hay Al Turath South',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 750,
                'city_id'    => 24,
                //'name'       => 'Karsha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 751,
                'city_id'    => 24,
                //'name'       => 'Karshaa Senaeya (Industrial Area)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 752,
                'city_id'    => 24,
                //'name'       => 'Manah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 753,
                'city_id'    => 24,
                //'name'       => 'Marfa Dares',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 754,
                'city_id'    => 24,
                //'name'       => 'Nizwa Suq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 755,
                'city_id'    => 24,
                //'name'       => 'Radet Al Bosaidi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 756,
                'city_id'    => 24,
                //'name'       => 'Temsa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 757,
                'city_id'    => 25,
                //'name'       => 'Al Ayjah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 758,
                'city_id'    => 25,
                //'name'       => 'Al Barr',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 759,
                'city_id'    => 25,
                //'name'       => 'Al Husainiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 760,
                'city_id'    => 25,
                //'name'       => 'Ar Rusagh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 761,
                'city_id'    => 25,
                //'name'       => 'Ash Shaabiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 762,
                'city_id'    => 25,
                //'name'       => 'Billad Suq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 763,
                'city_id'    => 25,
                //'name'       => 'Harat Al Balush',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 764,
                'city_id'    => 25,
                //'name'       => 'Hillat Al Kahraba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 765,
                'city_id'    => 25,
                //'name'       => 'Jabal Al Eid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 766,
                'city_id'    => 25,
                //'name'       => 'Murtafa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 767,
                'city_id'    => 25,
                //'name'       => 'Nismah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 768,
                'city_id'    => 25,
                //'name'       => 'Sur University College',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 769,
                'city_id'    => 26,
                //'name'       => 'Al Gherifa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 770,
                'city_id'    => 26,
                //'name'       => 'Al Helie',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 771,
                'city_id'    => 26,
                //'name'       => 'Ard ElGaw',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 772,
                'city_id'    => 26,
                //'name'       => 'Buraimi Industrial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 773,
                'city_id'    => 26,
                //'name'       => 'Buraimi University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 774,
                'city_id'    => 26,
                //'name'       => 'Hamasa Shaabiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 775,
                'city_id'    => 26,
                //'name'       => 'Khadrah Al Sieh (New)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 776,
                'city_id'    => 26,
                //'name'       => 'Khadrah Qadema (Old)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 777,
                'city_id'    => 26,
                //'name'       => 'Mazara Al Aqda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 778,
                'city_id'    => 26,
                //'name'       => 'Saraa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 779,
                'city_id'    => 27,
                //'name'       => 'Ar Rayibah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 780,
                'city_id'    => 27,
                //'name'       => 'Araqi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 781,
                'city_id'    => 27,
                //'name'       => 'Dubaishi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 782,
                'city_id'    => 27,
                //'name'       => 'Hijjar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 783,
                'city_id'    => 27,
                //'name'       => 'Ibri Hospital',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 784,
                'city_id'    => 27,
                //'name'       => 'Ibri Souq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 785,
                'city_id'    => 28,
                //'name'       => 'Abdali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 786,
                'city_id'    => 28,
                //'name'       => 'Abdoun',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 787,
                'city_id'    => 28,
                //'name'       => 'Abu Alanda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 788,
                'city_id'    => 28,
                //'name'       => 'Abu Nseir',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 789,
                'city_id'    => 28,
                //'name'       => 'Airport Road - Dunes Bridge',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 790,
                'city_id'    => 28,
                //'name'       => 'Airport Road - Madaba Bridge',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 791,
                'city_id'    => 28,
                //'name'       => 'Airport Road - Manaseer Gs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 792,
                'city_id'    => 28,
                //'name'       => 'Airport Road - Nakheel Village',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 793,
                'city_id'    => 28,
                //'name'       => 'Al Ashrafieh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 794,
                'city_id'    => 28,
                //'name'       => 'Al Bayader',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 795,
                'city_id'    => 28,
                //'name'       => 'Al Bnayyat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 796,
                'city_id'    => 28,
                //'name'       => 'Al Fuhais',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 797,
                'city_id'    => 28,
                //'name'       => 'Al Gardens',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 798,
                'city_id'    => 28,
                //'name'       => 'Al Hashmi Al Janobi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 799,
                'city_id'    => 28,
                //'name'       => 'Al Hashmi Al Shamali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 800,
                'city_id'    => 28,
                //'name'       => 'Al Hummar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 801,
                'city_id'    => 28,
                //'name'       => 'Al Jandaweel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 802,
                'city_id'    => 28,
                //'name'       => 'Al Jurn',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 803,
                'city_id'    => 28,
                //'name'       => 'Al Kamaliya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 804,
                'city_id'    => 28,
                //'name'       => 'Al Kursi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 805,
                'city_id'    => 28,
                //'name'       => 'Al Muqabalain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 806,
                'city_id'    => 28,
                //'name'       => 'Al Qusour',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 807,
                'city_id'    => 28,
                //'name'       => 'Al Qwaismeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 808,
                'city_id'    => 28,
                //'name'       => 'Al Rabiah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 809,
                'city_id'    => 28,
                //'name'       => 'Al Rajeeb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 810,
                'city_id'    => 28,
                //'name'       => 'Al Rawabi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 811,
                'city_id'    => 28,
                //'name'       => 'Al Rawnaq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 812,
                'city_id'    => 28,
                //'name'       => 'Al Ridwan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 813,
                'city_id'    => 28,
                //'name'       => 'Al Sahel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 814,
                'city_id'    => 28,
                //'name'       => 'Al Sina\'a',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 815,
                'city_id'    => 28,
                //'name'       => 'Al Swaifyeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 816,
                'city_id'    => 28,
                //'name'       => 'Arjan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 817,
                'city_id'    => 28,
                //'name'       => 'Bader Al Jadeda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 818,
                'city_id'    => 28,
                //'name'       => 'Dabouq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 819,
                'city_id'    => 28,
                //'name'       => 'Dabouq - Baccaloria',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 820,
                'city_id'    => 28,
                //'name'       => 'Dabouq - Ferdous',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 821,
                'city_id'    => 28,
                //'name'       => 'Daheit Al Ameer Hasan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 822,
                'city_id'    => 28,
                //'name'       => 'Daheit Al Aqsa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 823,
                'city_id'    => 28,
                //'name'       => 'Daheit Al Rasheed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 824,
                'city_id'    => 28,
                //'name'       => 'Daheit Al Yasmeen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 825,
                'city_id'    => 28,
                //'name'       => 'Dahiet Al Ameer Rashed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 826,
                'city_id'    => 28,
                //'name'       => 'Dahiet Al Hussain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 827,
                'city_id'    => 28,
                //'name'       => 'Deir Ghbar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 828,
                'city_id'    => 28,
                //'name'       => 'Downtown',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 829,
                'city_id'    => 28,
                //'name'       => 'Hay Al Rahmanieh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 830,
                'city_id'    => 28,
                //'name'       => 'Hay Albarakeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 831,
                'city_id'    => 28,
                //'name'       => 'Hay Alkhaledeen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 832,
                'city_id'    => 28,
                //'name'       => 'Hay Alsaleheen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 833,
                'city_id'    => 28,
                //'name'       => 'Iraq Al Ameer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 834,
                'city_id'    => 28,
                //'name'       => 'Jabal Al Hussain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 835,
                'city_id'    => 28,
                //'name'       => 'Jabal Al Nuzha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 836,
                'city_id'    => 28,
                //'name'       => 'Jabal Al Weibdeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 837,
                'city_id'    => 28,
                //'name'       => 'Jabal Al Zohor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 838,
                'city_id'    => 28,
                //'name'       => 'Jabal Amman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 839,
                'city_id'    => 28,
                //'name'       => 'Jubaiha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 840,
                'city_id'    => 28,
                //'name'       => 'Khalda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 841,
                'city_id'    => 28,
                //'name'       => 'King Hussein Business Park',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 842,
                'city_id'    => 28,
                //'name'       => 'Mahes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 843,
                'city_id'    => 28,
                //'name'       => 'Marj El Hamam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 844,
                'city_id'    => 28,
                //'name'       => 'Marka',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 845,
                'city_id'    => 28,
                //'name'       => 'Naour',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 846,
                'city_id'    => 28,
                //'name'       => 'Raghadan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 847,
                'city_id'    => 28,
                //'name'       => 'Ras El Ain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 848,
                'city_id'    => 28,
                //'name'       => 'Shafa Badran',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 849,
                'city_id'    => 28,
                //'name'       => 'Shmaisani',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 850,
                'city_id'    => 28,
                //'name'       => 'Sports City',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 851,
                'city_id'    => 28,
                //'name'       => 'Swelieh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 852,
                'city_id'    => 28,
                //'name'       => 'Tabarboor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 853,
                'city_id'    => 28,
                //'name'       => 'Tla\' Ali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 854,
                'city_id'    => 28,
                //'name'       => 'Um El Summaq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 855,
                'city_id'    => 28,
                //'name'       => 'Um Uthaiena',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 856,
                'city_id'    => 28,
                //'name'       => 'University Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 857,
                'city_id'    => 28,
                //'name'       => 'Wadi El Seer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 858,
                'city_id'    => 29,
                //'name'       => 'Al Atiba\'',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 859,
                'city_id'    => 29,
                //'name'       => 'Al Balad Al Qadeemeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 860,
                'city_id'    => 29,
                //'name'       => 'Al Herafeyeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 861,
                'city_id'    => 29,
                //'name'       => 'Al Mahdood Al Gharby',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 862,
                'city_id'    => 29,
                //'name'       => 'Al Mahdood Al Sharqy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 863,
                'city_id'    => 29,
                //'name'       => 'Al Mahdood Al Wasat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 864,
                'city_id'    => 29,
                //'name'       => 'Al Manarah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 865,
                'city_id'    => 29,
                //'name'       => 'Al Rimaal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 866,
                'city_id'    => 29,
                //'name'       => 'Al Sakaneyeh (1)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 867,
                'city_id'    => 29,
                //'name'       => 'Al Sakaneyeh (10)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 868,
                'city_id'    => 29,
                //'name'       => 'Al Sakaneyeh (2)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 869,
                'city_id'    => 29,
                //'name'       => 'Al Sakaneyeh (3)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 870,
                'city_id'    => 29,
                //'name'       => 'Al Sakaneyeh (4)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 871,
                'city_id'    => 29,
                //'name'       => 'Al Sakaneyeh (5)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 872,
                'city_id'    => 29,
                //'name'       => 'Al Sakaneyeh (6)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 873,
                'city_id'    => 29,
                //'name'       => 'Al Sakaneyeh (7)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 874,
                'city_id'    => 29,
                //'name'       => 'Al Sakaneyeh (8)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 875,
                'city_id'    => 29,
                //'name'       => 'Al Sakaneyeh (9)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 876,
                'city_id'    => 29,
                //'name'       => 'Al Shalalah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 877,
                'city_id'    => 29,
                //'name'       => 'Al U\'la',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 878,
                'city_id'    => 29,
                //'name'       => 'Sakan Al Asmedah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 879,
                'city_id'    => 29,
                //'name'       => 'Tala Bay',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 880,
                'city_id'    => 30,
                //'name'       => '30 Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 881,
                'city_id'    => 30,
                //'name'       => 'Al Balad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 882,
                'city_id'    => 30,
                //'name'       => 'Al Barha Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 883,
                'city_id'    => 30,
                //'name'       => 'Al Dorra Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 884,
                'city_id'    => 30,
                //'name'       => 'Al Eiadat Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 885,
                'city_id'    => 30,
                //'name'       => 'Al Hashmy Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 886,
                'city_id'    => 30,
                //'name'       => 'Al Hay Al Gharby',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 887,
                'city_id'    => 30,
                //'name'       => 'Al Hay Al Janooby',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 888,
                'city_id'    => 30,
                //'name'       => 'Al Hay Al Sharqy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 889,
                'city_id'    => 30,
                //'name'       => 'Al Hisbeh Al Markizeya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 890,
                'city_id'    => 30,
                //'name'       => 'Al Huson',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 891,
                'city_id'    => 30,
                //'name'       => 'Al Huson Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 892,
                'city_id'    => 30,
                //'name'       => 'Al Lawazem Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 893,
                'city_id'    => 30,
                //'name'       => 'Al Madinah Al Sena\'eiah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 894,
                'city_id'    => 30,
                //'name'       => 'Al Madrase Al Shamela',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 895,
                'city_id'    => 30,
                //'name'       => 'Al Mal\'ab Al Baladi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 896,
                'city_id'    => 30,
                //'name'       => 'Al Matla\'',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 897,
                'city_id'    => 30,
                //'name'       => 'Al Naseem Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 898,
                'city_id'    => 30,
                //'name'       => 'Al Nuzha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 899,
                'city_id'    => 30,
                //'name'       => 'Al Qubeh Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 900,
                'city_id'    => 30,
                //'name'       => 'Al Quds Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 901,
                'city_id'    => 30,
                //'name'       => 'Al Rabiah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 902,
                'city_id'    => 30,
                //'name'       => 'Al Rahebat Al Wardiah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 903,
                'city_id'    => 30,
                //'name'       => 'Al Rasheed Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 904,
                'city_id'    => 30,
                //'name'       => 'Al Sareeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 905,
                'city_id'    => 30,
                //'name'       => 'Al Sonbola',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 906,
                'city_id'    => 30,
                //'name'       => 'Al Souq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 907,
                'city_id'    => 30,
                //'name'       => 'Al Thaqafa Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 908,
                'city_id'    => 30,
                //'name'       => 'Albayyada Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 909,
                'city_id'    => 30,
                //'name'       => 'Bait Ras',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 910,
                'city_id'    => 30,
                //'name'       => 'Behind Safeway',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 911,
                'city_id'    => 30,
                //'name'       => 'Bushra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 912,
                'city_id'    => 30,
                //'name'       => 'Childrens Village (SOS)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 913,
                'city_id'    => 30,
                //'name'       => 'Daheit Al Ameer Rashed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 914,
                'city_id'    => 30,
                //'name'       => 'Daheit Al Hussain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 915,
                'city_id'    => 30,
                //'name'       => 'Eidoon',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 916,
                'city_id'    => 30,
                //'name'       => 'Eidoon Military Hospital',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 917,
                'city_id'    => 30,
                //'name'       => 'Fo\'ara Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 918,
                'city_id'    => 30,
                //'name'       => 'Ghorfat Al Tejara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 919,
                'city_id'    => 30,
                //'name'       => 'Hadiqet Al Zahraa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 920,
                'city_id'    => 30,
                //'name'       => 'Hakama',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 921,
                'city_id'    => 30,
                //'name'       => 'Hakama Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 922,
                'city_id'    => 30,
                //'name'       => 'Hasan Al Tal Mosque',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 923,
                'city_id'    => 30,
                //'name'       => 'Hay Al Abraar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 924,
                'city_id'    => 30,
                //'name'       => 'Hay Al Qaselah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 925,
                'city_id'    => 30,
                //'name'       => 'Hay Al Turokman',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 926,
                'city_id'    => 30,
                //'name'       => 'Hay Al Worood',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 927,
                'city_id'    => 30,
                //'name'       => 'Hay Alia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 928,
                'city_id'    => 30,
                //'name'       => 'Hay Altlool',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 929,
                'city_id'    => 30,
                //'name'       => 'Hay Twaal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 930,
                'city_id'    => 30,
                //'name'       => 'Honaina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 931,
                'city_id'    => 30,
                //'name'       => 'Howara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 932,
                'city_id'    => 30,
                //'name'       => 'Irbid Girl\'s College',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 933,
                'city_id'    => 30,
                //'name'       => 'Irbid Mall',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 934,
                'city_id'    => 30,
                //'name'       => 'Isharet Al Darawshe',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 935,
                'city_id'    => 30,
                //'name'       => 'Isharet Al Iskan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 936,
                'city_id'    => 30,
                //'name'       => 'Isharet Al Malika Noor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 937,
                'city_id'    => 30,
                //'name'       => 'Iskan Al A\'mileen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 938,
                'city_id'    => 30,
                //'name'       => 'Iskan Al Atiba\'',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 939,
                'city_id'    => 30,
                //'name'       => 'Iskan Al Dobbat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 940,
                'city_id'    => 30,
                //'name'       => 'Iskan Al Mohandeseen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 941,
                'city_id'    => 30,
                //'name'       => 'Joud Hotel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 942,
                'city_id'    => 30,
                //'name'       => 'Ketem',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 943,
                'city_id'    => 30,
                //'name'       => 'Kherbet Qasem',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 944,
                'city_id'    => 30,
                //'name'       => 'King Abdullah University Hospital',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 945,
                'city_id'    => 30,
                //'name'       => 'Kofor Youba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 946,
                'city_id'    => 30,
                //'name'       => 'Mojamma\' Al Aghwaar Al Jadeed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 947,
                'city_id'    => 30,
                //'name'       => 'Mojamma\' Al Shamali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 948,
                'city_id'    => 30,
                //'name'       => 'Mojamma\' Alshaikh Khaleel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 949,
                'city_id'    => 30,
                //'name'       => 'Mojamma\' Amman Al Jadeed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 950,
                'city_id'    => 30,
                //'name'       => 'Mokhayam Al Shaheed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 951,
                'city_id'    => 30,
                //'name'       => 'Mokhayam Irbid',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 952,
                'city_id'    => 30,
                //'name'       => 'Palestine Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 953,
                'city_id'    => 30,
                //'name'       => 'Petra Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 954,
                'city_id'    => 30,
                //'name'       => 'Princess Basma Hospital',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 955,
                'city_id'    => 30,
                //'name'       => 'Qasr Al Awwadeen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 956,
                'city_id'    => 30,
                //'name'       => 'Sahara Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 957,
                'city_id'    => 30,
                //'name'       => 'Sal Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 958,
                'city_id'    => 30,
                //'name'       => 'Salet Al Sharq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 959,
                'city_id'    => 30,
                //'name'       => 'Sharekat Al Kahraba Circle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 960,
                'city_id'    => 30,
                //'name'       => 'Tabariya School',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 961,
                'city_id'    => 30,
                //'name'       => 'University of Science and Technology',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 962,
                'city_id'    => 30,
                //'name'       => 'University Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 963,
                'city_id'    => 30,
                //'name'       => 'Zabda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 964,
                'city_id'    => 31,
                //'name'       => 'Al Andalusiah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 965,
                'city_id'    => 31,
                //'name'       => 'Al Hay Al Sharqy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 966,
                'city_id'    => 31,
                //'name'       => 'Al Nuzha Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 967,
                'city_id'    => 31,
                //'name'       => 'American University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 968,
                'city_id'    => 31,
                //'name'       => 'German University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 969,
                'city_id'    => 31,
                //'name'       => 'Haret Jdoudna',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 970,
                'city_id'    => 31,
                //'name'       => 'King\'s Academy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 971,
                'city_id'    => 32,
                //'name'       => 'Al Andalusiah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 972,
                'city_id'    => 32,
                //'name'       => 'Al Hay Al Sharqy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 973,
                'city_id'    => 32,
                //'name'       => 'Al Nuzha Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 974,
                'city_id'    => 32,
                //'name'       => 'American University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 975,
                'city_id'    => 32,
                //'name'       => 'German University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 976,
                'city_id'    => 32,
                //'name'       => 'Haret Jdoudna',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 977,
                'city_id'    => 32,
                //'name'       => 'King\'s Academy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 978,
                'city_id'    => 33,
                //'name'       => 'Al Autostrad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 979,
                'city_id'    => 33,
                //'name'       => 'Al ghweariyyeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 980,
                'city_id'    => 33,
                //'name'       => 'Al Hashemieh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 981,
                'city_id'    => 33,
                //'name'       => 'Al Hawooz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 982,
                'city_id'    => 33,
                //'name'       => 'Al Jaish Street',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 983,
                'city_id'    => 33,
                //'name'       => 'Al Madinah Al Monawarah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 984,
                'city_id'    => 33,
                //'name'       => 'Al mantika Al Hurra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 985,
                'city_id'    => 33,
                //'name'       => 'Al Souq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 986,
                'city_id'    => 33,
                //'name'       => 'Al Sukhneh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 987,
                'city_id'    => 33,
                //'name'       => 'Al Tatweer Al Hadari',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 988,
                'city_id'    => 33,
                //'name'       => 'Al Tatweer Al Hadari Rusaifah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 989,
                'city_id'    => 33,
                //'name'       => 'Al Zarqa Al Jadeedeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 990,
                'city_id'    => 33,
                //'name'       => 'Al Zawahra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 991,
                'city_id'    => 33,
                //'name'       => 'Al-Qadisyeh - Rusaifeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 992,
                'city_id'    => 33,
                //'name'       => 'Awajan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 993,
                'city_id'    => 33,
                //'name'       => 'Dahiet Al Amera Haya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 994,
                'city_id'    => 33,
                //'name'       => 'Hay Al Ameer Mohammad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 995,
                'city_id'    => 33,
                //'name'       => 'Hay Al Hussain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 996,
                'city_id'    => 33,
                //'name'       => 'Hay Al Iskan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 997,
                'city_id'    => 33,
                //'name'       => 'Hay Al Jundi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 998,
                'city_id'    => 33,
                //'name'       => 'Hay Al Nuzha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 999,
                'city_id'    => 33,
                //'name'       => 'Hay Al-Rasheed - Rusaifah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1000,
                'city_id'    => 33,
                //'name'       => 'Hay Ja\'far Al Tayyar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1001,
                'city_id'    => 33,
                //'name'       => 'Hay Ma\'soom',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1002,
                'city_id'    => 33,
                //'name'       => 'Hay Ramzi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1003,
                'city_id'    => 33,
                //'name'       => 'Hay Shaker',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1004,
                'city_id'    => 33,
                //'name'       => 'Iskan Al Batrawi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1005,
                'city_id'    => 33,
                //'name'       => 'Iskan Talal - Rusaifeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1006,
                'city_id'    => 33,
                //'name'       => 'Jabal Al Abyad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1007,
                'city_id'    => 33,
                //'name'       => 'Jabal Al Ameer Hamza',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1008,
                'city_id'    => 33,
                //'name'       => 'Jabal Al Ameer Hasan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1009,
                'city_id'    => 33,
                //'name'       => 'Jabal Al Amera Rahma',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1010,
                'city_id'    => 33,
                //'name'       => 'Jabal El Shamali Rusaifeh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1011,
                'city_id'    => 33,
                //'name'       => 'Jabal Tareq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1012,
                'city_id'    => 33,
                //'name'       => 'Jana\'a',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1013,
                'city_id'    => 33,
                //'name'       => 'Madinet El Sharq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1014,
                'city_id'    => 33,
                //'name'       => 'Rusaifeh El Janoobi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1015,
                'city_id'    => 33,
                //'name'       => 'The Hashemite University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1016,
                'city_id'    => 33,
                //'name'       => 'Wadi Al Aash',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1017,
                'city_id'    => 33,
                //'name'       => 'Wadi Al Hajar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1018,
                'city_id'    => 33,
                //'name'       => 'Zarqa Private University',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1019,
                'city_id'    => 34,
                //'name'       => 'Manama',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1020,
                'city_id'    => 34,
                //'name'       => 'Gudaibiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1021,
                'city_id'    => 34,
                //'name'       => 'Al Seef',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1022,
                'city_id'    => 34,
                //'name'       => 'Adliya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1023,
                'city_id'    => 34,
                //'name'       => 'Mahoz',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1024,
                'city_id'    => 34,
                //'name'       => 'Tubli',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1025,
                'city_id'    => 34,
                //'name'       => 'Isa Town',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1026,
                'city_id'    => 34,
                //'name'       => 'Jirdab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1027,
                'city_id'    => 34,
                //'name'       => 'Sitra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1028,
                'city_id'    => 34,
                //'name'       => 'Jidhafs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1029,
                'city_id'    => 34,
                //'name'       => 'Juffair',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1030,
                'city_id'    => 34,
                //'name'       => 'Salmaniya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1031,
                'city_id'    => 35,
                //'name'       => 'Muharraq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1032,
                'city_id'    => 35,
                //'name'       => 'Qalali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1033,
                'city_id'    => 35,
                //'name'       => 'Amwaj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1034,
                'city_id'    => 35,
                //'name'       => 'Busaiteen',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1035,
                'city_id'    => 35,
                //'name'       => 'Aldeer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1036,
                'city_id'    => 35,
                //'name'       => 'Hidd',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1037,
                'city_id'    => 36,
                //'name'       => 'Budaiya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1038,
                'city_id'    => 36,
                //'name'       => 'Salmabad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1039,
                'city_id'    => 36,
                //'name'       => 'A?ali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1040,
                'city_id'    => 36,
                //'name'       => 'Barbar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1041,
                'city_id'    => 36,
                //'name'       => 'Hamad Town',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1042,
                'city_id'    => 36,
                //'name'       => 'Al-Malikiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1043,
                'city_id'    => 36,
                //'name'       => 'Sar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1044,
                'city_id'    => 36,
                //'name'       => 'Hamala',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1045,
                'city_id'    => 37,
                //'name'       => 'Riffa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1046,
                'city_id'    => 37,
                //'name'       => 'Zayed Town',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1047,
                'city_id'    => 37,
                //'name'       => 'Isa Town',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1048,
                'city_id'    => 37,
                //'name'       => 'Sanad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1049,
                'city_id'    => 37,
                //'name'       => 'Nuwaidrat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1050,
                'city_id'    => 37,
                //'name'       => 'A\'ali',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1051,
                'city_id'    => 37,
                //'name'       => 'Aldur',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1052,
                'city_id'    => 37,
                //'name'       => 'Zallaq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1053,
                'city_id'    => 38,
                //'name'       => 'Riyadh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1054,
                'city_id'    => 38,
                //'name'       => 'Al Diriyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1055,
                'city_id'    => 38,
                //'name'       => 'Al Kharj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1056,
                'city_id'    => 38,
                //'name'       => 'Al Duwadimi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1057,
                'city_id'    => 38,
                //'name'       => 'Al Majma\'ah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1058,
                'city_id'    => 38,
                //'name'       => 'Al Quway\'iyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1059,
                'city_id'    => 38,
                //'name'       => 'Wadi Al Dawasir',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1060,
                'city_id'    => 38,
                //'name'       => 'Al Aflaj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1061,
                'city_id'    => 38,
                //'name'       => 'Al Zulfi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1062,
                'city_id'    => 38,
                //'name'       => 'Shaqra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1063,
                'city_id'    => 38,
                //'name'       => 'Howtat Bani Tamim',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1064,
                'city_id'    => 38,
                //'name'       => 'Afif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1065,
                'city_id'    => 38,
                //'name'       => 'Al Sulayyil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1066,
                'city_id'    => 38,
                //'name'       => 'Dhurma',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1067,
                'city_id'    => 38,
                //'name'       => 'Al Muzahimiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1068,
                'city_id'    => 38,
                //'name'       => 'Rumah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1069,
                'city_id'    => 38,
                //'name'       => 'Thadiq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1070,
                'city_id'    => 38,
                //'name'       => 'Huraymila',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1071,
                'city_id'    => 38,
                //'name'       => 'Al Hariq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1072,
                'city_id'    => 38,
                //'name'       => 'Al Ghat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1073,
                'city_id'    => 39,
                //'name'       => 'Mecca',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1074,
                'city_id'    => 39,
                //'name'       => 'Jeddah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1075,
                'city_id'    => 39,
                //'name'       => 'Al Ta\'if',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1076,
                'city_id'    => 39,
                //'name'       => 'Al Qunfudhah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1077,
                'city_id'    => 39,
                //'name'       => 'Al Lith',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1078,
                'city_id'    => 39,
                //'name'       => 'Rabigh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1079,
                'city_id'    => 39,
                //'name'       => 'Al Jumum',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1080,
                'city_id'    => 39,
                //'name'       => 'Khulays',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1081,
                'city_id'    => 39,
                //'name'       => 'Al Kamil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1082,
                'city_id'    => 39,
                //'name'       => 'Al Khurmah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1083,
                'city_id'    => 39,
                //'name'       => 'Ranyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1084,
                'city_id'    => 39,
                //'name'       => 'Turubah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1085,
                'city_id'    => 40,
                //'name'       => 'Madinah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1086,
                'city_id'    => 40,
                //'name'       => 'Yanbu',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1087,
                'city_id'    => 40,
                //'name'       => 'Al-`Ula',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1088,
                'city_id'    => 40,
                //'name'       => 'Mahd adh Dhahab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1089,
                'city_id'    => 40,
                //'name'       => 'Badr',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1090,
                'city_id'    => 40,
                //'name'       => ' Khaybar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1091,
                'city_id'    => 40,
                //'name'       => 'Al Henakiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1092,
                'city_id'    => 41,
                //'name'       => 'Buraydah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1093,
                'city_id'    => 41,
                //'name'       => 'Unayzah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1094,
                'city_id'    => 41,
                //'name'       => 'Al Rass',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1095,
                'city_id'    => 41,
                //'name'       => 'Al Mithnab',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1096,
                'city_id'    => 41,
                //'name'       => 'Al Bukayriyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1097,
                'city_id'    => 41,
                //'name'       => 'Al Badayea',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1098,
                'city_id'    => 41,
                //'name'       => 'Al Asyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1099,
                'city_id'    => 41,
                //'name'       => 'Al Nabhaniyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1100,
                'city_id'    => 41,
                //'name'       => 'Uyun Al Jiwa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1101,
                'city_id'    => 41,
                //'name'       => 'Riyadh Al Khabra',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1102,
                'city_id'    => 41,
                //'name'       => 'Al Shimasiyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1103,
                'city_id'    => 42,
                //'name'       => 'Al Dammam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1104,
                'city_id'    => 42,
                //'name'       => 'Al Ahsa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1105,
                'city_id'    => 42,
                //'name'       => 'Hafar Al Batin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1106,
                'city_id'    => 42,
                //'name'       => 'Jubail',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1107,
                'city_id'    => 42,
                //'name'       => 'Al Qatif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1108,
                'city_id'    => 42,
                //'name'       => 'Al Khobar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1109,
                'city_id'    => 42,
                //'name'       => 'Al Khafji',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1110,
                'city_id'    => 42,
                //'name'       => 'Ras Tanurah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1111,
                'city_id'    => 42,
                //'name'       => 'Buqayq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1112,
                'city_id'    => 42,
                //'name'       => 'Al Nairyah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1113,
                'city_id'    => 42,
                //'name'       => 'Qaryat al-Ulya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1114,
                'city_id'    => 43,
                //'name'       => 'Abha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1115,
                'city_id'    => 43,
                //'name'       => 'Khamis Mushait',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1116,
                'city_id'    => 43,
                //'name'       => 'Bisha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1117,
                'city_id'    => 43,
                //'name'       => 'Al Namas',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1118,
                'city_id'    => 43,
                //'name'       => 'Muhayil',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1119,
                'city_id'    => 43,
                //'name'       => 'Sarat Abidah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1120,
                'city_id'    => 43,
                //'name'       => 'Tathlith',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1121,
                'city_id'    => 43,
                //'name'       => 'Rojal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1122,
                'city_id'    => 43,
                //'name'       => 'Ahad Rafidah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1123,
                'city_id'    => 43,
                //'name'       => 'Dhahran Al Janub',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1124,
                'city_id'    => 43,
                //'name'       => 'Balqarn',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1125,
                'city_id'    => 43,
                //'name'       => 'Al Majaridah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1126,
                'city_id'    => 44,
                //'name'       => 'Tabuk',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1127,
                'city_id'    => 44,
                //'name'       => 'Al Wajh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1128,
                'city_id'    => 44,
                //'name'       => 'Duba',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1129,
                'city_id'    => 44,
                //'name'       => 'Tayma',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1130,
                'city_id'    => 44,
                //'name'       => 'Umluj',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1131,
                'city_id'    => 44,
                //'name'       => 'Haql',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1132,
                'city_id'    => 45,
                //'name'       => 'Ha\'il',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1133,
                'city_id'    => 45,
                //'name'       => 'Baqaa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1134,
                'city_id'    => 45,
                //'name'       => 'Haet',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1135,
                'city_id'    => 45,
                //'name'       => 'Al Shinan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1136,
                'city_id'    => 46,
                //'name'       => 'Ar\'ar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1137,
                'city_id'    => 46,
                //'name'       => 'Rafha',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1138,
                'city_id'    => 46,
                //'name'       => 'Turaif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1139,
                'city_id'    => 47,
                //'name'       => 'Jizan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1140,
                'city_id'    => 47,
                //'name'       => 'Sabya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1141,
                'city_id'    => 47,
                //'name'       => 'Abu `Arish',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1142,
                'city_id'    => 47,
                //'name'       => 'Samtah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1143,
                'city_id'    => 47,
                //'name'       => 'Al Harth',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1144,
                'city_id'    => 47,
                //'name'       => 'Damad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1145,
                'city_id'    => 47,
                //'name'       => 'Al Reeth',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1146,
                'city_id'    => 47,
                //'name'       => 'Baish',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1147,
                'city_id'    => 47,
                //'name'       => 'Farasan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1148,
                'city_id'    => 47,
                //'name'       => 'Al Dayer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1149,
                'city_id'    => 47,
                //'name'       => 'Ahad Al Masarihah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1150,
                'city_id'    => 47,
                //'name'       => 'Al Edabi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1151,
                'city_id'    => 47,
                //'name'       => 'Al Aridhah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1152,
                'city_id'    => 47,
                //'name'       => 'Al Darb',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1153,
                'city_id'    => 48,
                //'name'       => 'Najran',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1154,
                'city_id'    => 48,
                //'name'       => 'Sharurah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1155,
                'city_id'    => 48,
                //'name'       => 'Hubuna',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1156,
                'city_id'    => 48,
                //'name'       => 'Badr Al Janub',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1157,
                'city_id'    => 48,
                //'name'       => 'Yadamah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1158,
                'city_id'    => 48,
                //'name'       => 'Thar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1159,
                'city_id'    => 48,
                //'name'       => 'Khubash',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1160,
                'city_id'    => 48,
                //'name'       => 'Al Kharkhir',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1161,
                'city_id'    => 49,
                //'name'       => 'Al Bahah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1162,
                'city_id'    => 49,
                //'name'       => 'Baljurashi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1163,
                'city_id'    => 49,
                //'name'       => 'Al Mandaq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1164,
                'city_id'    => 49,
                //'name'       => 'Al Makhwah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1165,
                'city_id'    => 49,
                //'name'       => 'Al Aqiq',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1166,
                'city_id'    => 49,
                //'name'       => 'Qilwah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1167,
                'city_id'    => 49,
                //'name'       => 'Al Qara',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1168,
                'city_id'    => 50,
                //'name'       => 'Sakakah',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1169,
                'city_id'    => 50,
                //'name'       => 'Qurayyat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 1170,
                'city_id'    => 50,
                //'name'       => 'Dumat Al-Jandal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
