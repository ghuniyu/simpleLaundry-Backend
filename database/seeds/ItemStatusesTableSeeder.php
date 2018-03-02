<?php

use Illuminate\Database\Seeder;

class ItemStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_statuses')->insert([
           ['description' => 'Waiting'],
           ['description' => 'Laundering'],
           ['description' => 'Finishing'],
           ['description' => 'Ready for Pickup'],
        ]);
    }
}
