<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ServicesTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_translations')->insert([
            [
                'id'         => 1,
                'service_id' => 1,
                'locale'     => 'en',
                'name'       => 'Body and cosmetic',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 2,
                'service_id' => 2,
                'locale'     => 'en',
                'name'       => 'Breakdown and Recovery',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 3,
                'service_id' => 3,
                'locale'     => 'en',
                'name'       => 'Brakes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 4,
                'service_id' => 4,
                'locale'     => 'en',
                'name'       => 'Car Cleaning',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 5,
                'service_id' => 5,
                'locale'     => 'en',
                'name'       => 'Cooling System',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 6,
                'service_id' => 6,
                'locale'     => 'en',
                'name'       => 'Electrical and Battery',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 7,
                'service_id' => 7,
                'locale'     => 'en',
                'name'       => 'Engine',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 8,
                'service_id' => 8,
                'locale'     => 'en',
                'name'       => 'Exhaust and omissions',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 9,
                'service_id' => 9,
                'locale'     => 'en',
                'name'       => 'Interior, Audio and Navigation',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 10,
                'service_id' => 10,
                'locale'     => 'en',
                'name'       => 'Mobile Mechanics and Services',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 11,
                'service_id' => 11,
                'locale'     => 'en',
                'name'       => 'Not Sure What\'s Wrong I Need Help!',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 12,
                'service_id' => 12,
                'locale'     => 'en',
                'name'       => 'Safety Components',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 13,
                'service_id' => 13,
                'locale'     => 'en',
                'name'       => 'Security, Locks and Keys',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 14,
                'service_id' => 14,
                'locale'     => 'en',
                'name'       => 'Servicing and Testing',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 15,
                'service_id' => 15,
                'locale'     => 'en',
                'name'       => 'Suspension and Steering',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 16,
                'service_id' => 16,
                'locale'     => 'en',
                'name'       => 'Transmission',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 17,
                'service_id' => 17,
                'locale'     => 'en',
                'name'       => 'Tyres, Wheels and Tracking',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 18,
                'service_id' => 18,
                'locale'     => 'en',
                'name'       => 'Windows, Windscreen and Mirrors',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 19,
                'service_id' => 19,
                'locale'     => 'en',
                'name'       => 'Bodyshop',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 20,
                'service_id' => 20,
                'locale'     => 'en',
                'name'       => 'Crash / Accident Repairs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 21,
                'service_id' => 21,
                'locale'     => 'en',
                'name'       => 'Dent Removal - Major',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 22,
                'service_id' => 22,
                'locale'     => 'en',
                'name'       => 'Dent Removal - Minor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 23,
                'service_id' => 23,
                'locale'     => 'en',
                'name'       => 'Paintwork Repair',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 24,
                'service_id' => 24,
                'locale'     => 'en',
                'name'       => 'Panel Beating',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 25,
                'service_id' => 25,
                'locale'     => 'en',
                'name'       => 'Respraying',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 26,
                'service_id' => 26,
                'locale'     => 'en',
                'name'       => 'Scratch and scuff repair',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 27,
                'service_id' => 27,
                'locale'     => 'en',
                'name'       => 'Welding',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 28,
                'service_id' => 28,
                'locale'     => 'en',
                'name'       => 'Wrapping and Vinyl Wrap',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 29,
                'service_id' => 29,
                'locale'     => 'en',
                'name'       => 'Body and Cosmetic - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 30,
                'service_id' => 30,
                'locale'     => 'en',
                'name'       => 'Recovery',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 31,
                'service_id' => 31,
                'locale'     => 'en',
                'name'       => 'Breakdown and Recovery - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 32,
                'service_id' => 32,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 33,
                'service_id' => 33,
                'locale'     => 'en',
                'name'       => 'ABS System',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 34,
                'service_id' => 34,
                'locale'     => 'en',
                'name'       => 'Brake Fluid Flush',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 35,
                'service_id' => 35,
                'locale'     => 'en',
                'name'       => 'Brake Repairs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 36,
                'service_id' => 36,
                'locale'     => 'en',
                'name'       => 'Hand Brake',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 37,
                'service_id' => 37,
                'locale'     => 'en',
                'name'       => 'Replace Front Brake Discs and Pads',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 38,
                'service_id' => 38,
                'locale'     => 'en',
                'name'       => 'Replace Front Brake Pads',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 39,
                'service_id' => 39,
                'locale'     => 'en',
                'name'       => 'Replace Rear -Brake Discs and Pads',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 40,
                'service_id' => 40,
                'locale'     => 'en',
                'name'       => 'Replace Rear - Brake Pads',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 41,
                'service_id' => 41,
                'locale'     => 'en',
                'name'       => 'Brakes - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 42,
                'service_id' => 42,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 43,
                'service_id' => 43,
                'locale'     => 'en',
                'name'       => 'Full Valeting',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 44,
                'service_id' => 44,
                'locale'     => 'en',
                'name'       => 'Exterior clean',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 45,
                'service_id' => 45,
                'locale'     => 'en',
                'name'       => 'Interior clean',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 46,
                'service_id' => 46,
                'locale'     => 'en',
                'name'       => 'Air Conditioning Service',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 47,
                'service_id' => 47,
                'locale'     => 'en',
                'name'       => 'Aircon regas',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 48,
                'service_id' => 48,
                'locale'     => 'en',
                'name'       => 'Car Heater',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 49,
                'service_id' => 49,
                'locale'     => 'en',
                'name'       => 'Car Radiator Repair',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 50,
                'service_id' => 50,
                'locale'     => 'en',
                'name'       => 'Heater Matrix',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 51,
                'service_id' => 51,
                'locale'     => 'en',
                'name'       => 'Overheating',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 52,
                'service_id' => 52,
                'locale'     => 'en',
                'name'       => 'Cooling System - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 53,
                'service_id' => 53,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 54,
                'service_id' => 54,
                'locale'     => 'en',
                'name'       => 'In Car Entertainment',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 55,
                'service_id' => 55,
                'locale'     => 'en',
                'name'       => 'Lights and Bulbs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 56,
                'service_id' => 56,
                'locale'     => 'en',
                'name'       => 'Parking Sensors',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 57,
                'service_id' => 57,
                'locale'     => 'en',
                'name'       => 'Replace Starter Motor',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 58,
                'service_id' => 58,
                'locale'     => 'en',
                'name'       => 'Replace Air Flow Meter',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 59,
                'service_id' => 59,
                'locale'     => 'en',
                'name'       => 'Repair / Replace Alternator',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 60,
                'service_id' => 60,
                'locale'     => 'en',
                'name'       => 'Replace Battery',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 61,
                'service_id' => 61,
                'locale'     => 'en',
                'name'       => 'Electrical - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 62,
                'service_id' => 62,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 63,
                'service_id' => 63,
                'locale'     => 'en',
                'name'       => 'Cambelt Change',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 64,
                'service_id' => 64,
                'locale'     => 'en',
                'name'       => 'Engine Management Light',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 65,
                'service_id' => 65,
                'locale'     => 'en',
                'name'       => 'Fan Belt',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 66,
                'service_id' => 66,
                'locale'     => 'en',
                'name'       => 'Fuel Injection System',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 67,
                'service_id' => 67,
                'locale'     => 'en',
                'name'       => 'Fuel Pump',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 68,
                'service_id' => 68,
                'locale'     => 'en',
                'name'       => 'Head Gasket',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 69,
                'service_id' => 69,
                'locale'     => 'en',
                'name'       => 'Oil leak',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 70,
                'service_id' => 70,
                'locale'     => 'en',
                'name'       => 'Replace spark plugs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 71,
                'service_id' => 71,
                'locale'     => 'en',
                'name'       => 'Timing Belt and Water Pump',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 72,
                'service_id' => 72,
                'locale'     => 'en',
                'name'       => 'Timing chain',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 73,
                'service_id' => 73,
                'locale'     => 'en',
                'name'       => 'Turbo Faults and Replacement',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 74,
                'service_id' => 74,
                'locale'     => 'en',
                'name'       => 'Water Pump',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 75,
                'service_id' => 75,
                'locale'     => 'en',
                'name'       => 'Engine - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 76,
                'service_id' => 76,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 77,
                'service_id' => 77,
                'locale'     => 'en',
                'name'       => 'Blue Smoke from Exhaust',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 78,
                'service_id' => 78,
                'locale'     => 'en',
                'name'       => 'EGR Valve',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 79,
                'service_id' => 79,
                'locale'     => 'en',
                'name'       => 'Exhaust Fitting',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 80,
                'service_id' => 80,
                'locale'     => 'en',
                'name'       => 'Exhaust Repair',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 81,
                'service_id' => 81,
                'locale'     => 'en',
                'name'       => 'White Smoke from Exhaust',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 82,
                'service_id' => 82,
                'locale'     => 'en',
                'name'       => 'Replace Catalytic Converter',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 83,
                'service_id' => 83,
                'locale'     => 'en',
                'name'       => 'Exhaust and omissions - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 84,
                'service_id' => 84,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 85,
                'service_id' => 85,
                'locale'     => 'en',
                'name'       => 'Car Audio',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 86,
                'service_id' => 86,
                'locale'     => 'en',
                'name'       => 'Convertible Roof Repair',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 87,
                'service_id' => 87,
                'locale'     => 'en',
                'name'       => 'Interior Trim',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 88,
                'service_id' => 88,
                'locale'     => 'en',
                'name'       => 'Upholstery Repair ',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 89,
                'service_id' => 89,
                'locale'     => 'en',
                'name'       => 'Interior Audio and Navigation - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 90,
                'service_id' => 90,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 91,
                'service_id' => 91,
                'locale'     => 'en',
                'name'       => 'Mobile Alloy Wheel Repair',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 92,
                'service_id' => 92,
                'locale'     => 'en',
                'name'       => 'Mobile Dent Repair',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 93,
                'service_id' => 93,
                'locale'     => 'en',
                'name'       => 'Mobile Mechanic',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 94,
                'service_id' => 94,
                'locale'     => 'en',
                'name'       => 'Mobile Servicing',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 95,
                'service_id' => 95,
                'locale'     => 'en',
                'name'       => 'Mobile Tyre Fitting',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 96,
                'service_id' => 96,
                'locale'     => 'en',
                'name'       => 'Pre-Purchase Car Inspection',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 97,
                'service_id' => 97,
                'locale'     => 'en',
                'name'       => 'Mobile Mechanics and Services - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 98,
                'service_id' => 98,
                'locale'     => 'en',
                'name'       => 'Banging or Knocking Noise',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 99,
                'service_id' => 99,
                'locale'     => 'en',
                'name'       => 'Diagnostic Test',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 100,
                'service_id' => 100,
                'locale'     => 'en',
                'name'       => 'Electrical Fault Diagnosis',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 101,
                'service_id' => 101,
                'locale'     => 'en',
                'name'       => 'Engine Balancing and Remapping',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 102,
                'service_id' => 102,
                'locale'     => 'en',
                'name'       => 'Engine Tuning',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 103,
                'service_id' => 103,
                'locale'     => 'en',
                'name'       => 'General Repairs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 104,
                'service_id' => 104,
                'locale'     => 'en',
                'name'       => 'Leak',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 105,
                'service_id' => 105,
                'locale'     => 'en',
                'name'       => 'Loss of Power',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 106,
                'service_id' => 106,
                'locale'     => 'en',
                'name'       => 'Minor Repairs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 107,
                'service_id' => 107,
                'locale'     => 'en',
                'name'       => 'My Car Won\'t Start',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 108,
                'service_id' => 108,
                'locale'     => 'en',
                'name'       => 'Squeaking or Squealing Noise',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 109,
                'service_id' => 109,
                'locale'     => 'en',
                'name'       => 'Ticking or Rattling Noise',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 110,
                'service_id' => 110,
                'locale'     => 'en',
                'name'       => 'Diagnostics - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 111,
                'service_id' => 111,
                'locale'     => 'en',
                'name'       => 'Airbag Repair / Replacement',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 112,
                'service_id' => 112,
                'locale'     => 'en',
                'name'       => 'Seatbelt Repair',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 113,
                'service_id' => 113,
                'locale'     => 'en',
                'name'       => 'Safety Components -Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 114,
                'service_id' => 114,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 115,
                'service_id' => 115,
                'locale'     => 'en',
                'name'       => 'Auto Locksmith',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 116,
                'service_id' => 116,
                'locale'     => 'en',
                'name'       => 'Car Alarm keeps going off',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 117,
                'service_id' => 117,
                'locale'     => 'en',
                'name'       => 'Central Locking Systems',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 118,
                'service_id' => 118,
                'locale'     => 'en',
                'name'       => 'Immobiliser Faults',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 119,
                'service_id' => 119,
                'locale'     => 'en',
                'name'       => 'Key Programming and Codes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 120,
                'service_id' => 120,
                'locale'     => 'en',
                'name'       => 'Key Replacement',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 121,
                'service_id' => 121,
                'locale'     => 'en',
                'name'       => 'Security Locks and Keys -Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 122,
                'service_id' => 122,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 123,
                'service_id' => 123,
                'locale'     => 'en',
                'name'       => 'Air Conditioning Check & Refresh',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 124,
                'service_id' => 124,
                'locale'     => 'en',
                'name'       => 'Fuel / Emissions Service',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 125,
                'service_id' => 125,
                'locale'     => 'en',
                'name'       => 'Full Service',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 126,
                'service_id' => 126,
                'locale'     => 'en',
                'name'       => 'Full Service and Vehicle Testing',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 127,
                'service_id' => 127,
                'locale'     => 'en',
                'name'       => 'Minor / Interim Service',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 128,
                'service_id' => 128,
                'locale'     => 'en',
                'name'       => 'Major / Interim Service and Testing',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 129,
                'service_id' => 129,
                'locale'     => 'en',
                'name'       => 'Oil Change',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 130,
                'service_id' => 130,
                'locale'     => 'en',
                'name'       => 'Summer Check',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 131,
                'service_id' => 131,
                'locale'     => 'en',
                'name'       => 'Vehicle Health Check',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 132,
                'service_id' => 132,
                'locale'     => 'en',
                'name'       => 'Vehicle Testing',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 133,
                'service_id' => 133,
                'locale'     => 'en',
                'name'       => 'Winter Check',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 134,
                'service_id' => 134,
                'locale'     => 'en',
                'name'       => 'Servicing and Testing - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 135,
                'service_id' => 135,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 136,
                'service_id' => 136,
                'locale'     => 'en',
                'name'       => 'Axle Repairs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 137,
                'service_id' => 137,
                'locale'     => 'en',
                'name'       => 'Car Pulling Left or Right',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 138,
                'service_id' => 138,
                'locale'     => 'en',
                'name'       => 'Coil Springs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 139,
                'service_id' => 139,
                'locale'     => 'en',
                'name'       => 'CV Joint',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 140,
                'service_id' => 140,
                'locale'     => 'en',
                'name'       => 'Power Steering',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 141,
                'service_id' => 141,
                'locale'     => 'en',
                'name'       => 'Replace Front Anti Roll Bar Link (one)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 142,
                'service_id' => 142,
                'locale'     => 'en',
                'name'       => 'Replace Front Coil Springs (Pair)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 143,
                'service_id' => 143,
                'locale'     => 'en',
                'name'       => 'Replace Front Shock Absorbers (Pair)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 144,
                'service_id' => 144,
                'locale'     => 'en',
                'name'       => 'Replace Inner CV Gaiter (One)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 145,
                'service_id' => 145,
                'locale'     => 'en',
                'name'       => 'Replace Left Front Wheel Bearing',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 146,
                'service_id' => 146,
                'locale'     => 'en',
                'name'       => 'Replace Left Rear Wheel Bearing',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 147,
                'service_id' => 147,
                'locale'     => 'en',
                'name'       => 'Replace Left Track Rod End',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 148,
                'service_id' => 148,
                'locale'     => 'en',
                'name'       => 'Replace Outer CV Gaiter (One)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 149,
                'service_id' => 149,
                'locale'     => 'en',
                'name'       => 'Replace Rear Coil Springs (Pair)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 150,
                'service_id' => 150,
                'locale'     => 'en',
                'name'       => 'Replace Rear Shock Absorbers (Pair)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 151,
                'service_id' => 151,
                'locale'     => 'en',
                'name'       => 'Replace Right Front Wheel Bearing',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 152,
                'service_id' => 152,
                'locale'     => 'en',
                'name'       => 'Replace Right Rear Wheel Bearing',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 153,
                'service_id' => 153,
                'locale'     => 'en',
                'name'       => 'Replace Right Track Road End',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 154,
                'service_id' => 154,
                'locale'     => 'en',
                'name'       => 'Steering Rack',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 155,
                'service_id' => 155,
                'locale'     => 'en',
                'name'       => 'Steering Wheel Shaking',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 156,
                'service_id' => 156,
                'locale'     => 'en',
                'name'       => 'Suspension Repairs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 157,
                'service_id' => 157,
                'locale'     => 'en',
                'name'       => 'Suspension and Steering - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 158,
                'service_id' => 158,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 159,
                'service_id' => 159,
                'locale'     => 'en',
                'name'       => 'Auto Gearbox Repairs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 160,
                'service_id' => 160,
                'locale'     => 'en',
                'name'       => 'Auto Gearbox Specialist',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 161,
                'service_id' => 161,
                'locale'     => 'en',
                'name'       => 'Clutch Cable',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 162,
                'service_id' => 162,
                'locale'     => 'en',
                'name'       => 'Clutch Repairs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 163,
                'service_id' => 163,
                'locale'     => 'en',
                'name'       => 'Clutch Replacement',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 164,
                'service_id' => 164,
                'locale'     => 'en',
                'name'       => 'Gearbox Repairs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 165,
                'service_id' => 165,
                'locale'     => 'en',
                'name'       => 'Reconditioned Gearbox',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 166,
                'service_id' => 166,
                'locale'     => 'en',
                'name'       => 'Replace Turbo Charger',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 167,
                'service_id' => 167,
                'locale'     => 'en',
                'name'       => 'Transmission - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 168,
                'service_id' => 168,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 169,
                'service_id' => 169,
                'locale'     => 'en',
                'name'       => 'Alloy Wheel Refurbishment',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 170,
                'service_id' => 170,
                'locale'     => 'en',
                'name'       => 'Front and Rear Wheel Alignment',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 171,
                'service_id' => 171,
                'locale'     => 'en',
                'name'       => 'Front Wheel Alignment',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 172,
                'service_id' => 172,
                'locale'     => 'en',
                'name'       => 'Puncture Repair',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 173,
                'service_id' => 173,
                'locale'     => 'en',
                'name'       => 'Rear Wheel Alignment',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 174,
                'service_id' => 174,
                'locale'     => 'en',
                'name'       => 'Specialist Tyres',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 175,
                'service_id' => 175,
                'locale'     => 'en',
                'name'       => 'Tyre Fitting',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 176,
                'service_id' => 176,
                'locale'     => 'en',
                'name'       => 'Wheel Bearing',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 177,
                'service_id' => 177,
                'locale'     => 'en',
                'name'       => 'Wheel Tracking',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 178,
                'service_id' => 178,
                'locale'     => 'en',
                'name'       => 'Winter Tyres',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 179,
                'service_id' => 179,
                'locale'     => 'en',
                'name'       => 'Tyres Wheels and Tracking - Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 180,
                'service_id' => 180,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 181,
                'service_id' => 181,
                'locale'     => 'en',
                'name'       => 'Electric Window Faults',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 182,
                'service_id' => 182,
                'locale'     => 'en',
                'name'       => 'Window Replacement',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 183,
                'service_id' => 183,
                'locale'     => 'en',
                'name'       => 'Window Tinting',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 184,
                'service_id' => 184,
                'locale'     => 'en',
                'name'       => 'Windscreen Replacement',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 185,
                'service_id' => 185,
                'locale'     => 'en',
                'name'       => 'Windscreen Wipers',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 186,
                'service_id' => 186,
                'locale'     => 'en',
                'name'       => 'Wing Mirror',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 187,
                'service_id' => 187,
                'locale'     => 'en',
                'name'       => 'Windows Windscreen and Mirrors -Other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 188,
                'service_id' => 188,
                'locale'     => 'en',
                'name'       => 'I\'m not sure what\'s wrong -Diagnostics',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}