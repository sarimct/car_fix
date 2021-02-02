<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = public_path() . '/csv/niger.csv';
        $csv = Reader::createFromPath($file);
//        $csv->setOffset(1); //because we don't want to insert the header
        $nbInsert = $csv->each(function ($row) {
            DB::table('users')->insert(
                array(
                    'id'         => $row[0],
                    'name'       => $row[1],
                    'email'      => $row[2],
                    'password'   => $row[3],
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                )
            );
        });

        /*DB::table('users')->insert([
            [
                'id'         => 1,
                'name'       => "Super Admin",
                'email'      => "superadmin@ingic.com",
                'password'   => bcrypt('superadmin123'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 2,
                'name'       => "Admin",
                'email'      => "admin@ingic.com",
                'password'   => bcrypt('admin123'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);*/

        DB::table('role_user')->insert([
            [
                'user_id' => 1,
                'role_id' => 1,
            ],
            [
                'user_id' => 2,
                'role_id' => 2,
            ]
        ]);
    }
}