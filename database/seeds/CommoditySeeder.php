<?php

use App\Models\CommodityMaster;
use Illuminate\Database\Seeder;

class CommoditySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Wheat',
                'country_id' => 1
            ],
            [
                'name' => 'Rice',
                'country_id' => 1
            ]
        ];

        foreach ($data as $value) {
            CommodityMaster::create($value);
        }
    }
}
