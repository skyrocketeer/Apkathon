<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\District::class,24)->create()->each(function ($district){
            $district->wards()->save(factory(App\Ward::class)->make());
        });
    }
}
