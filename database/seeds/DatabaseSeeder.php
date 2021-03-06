<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LocalesSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(CountryTranslationSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(CityTranslationSeeder::class);
        $this->call(AreasSeeder::class);
        $this->call(AreasTranslationSeeder::class);
        $this->call(MakerSeeder::class);
        $this->call(ModelsSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(ServicesTranslationSeeder::class);
    }
}