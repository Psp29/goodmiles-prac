<?php

use App\Models\DeliveryLocation;
use Illuminate\Database\Seeder;

class DeliveryLocationSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Berlin',
                'country_id' => 1
            ],
            [
                'name' => 'Humburg',
                'country_id' => 1
            ]
        ];

        foreach ($data as $value) {
            DeliveryLocation::create($value);
        }
    }
}
