<?php

use Illuminate\Database\Seeder;

class AdvertisementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Advertisement::class, 50)->create();
    }
}
