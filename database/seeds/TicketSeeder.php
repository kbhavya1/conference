<?php

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('tickets')->insert([
            'id' => '2',
            'catagory' => 'Normal',
            'price' => '2000',
            'type' => 'Indian',
        ]);

        DB::table('tickets')->insert([
            'id' => '3',
            'catagory' => 'Normal',
            'price' => '3000',
            'type' => 'Indian',
        ]);

        DB::table('tickets')->insert([
            'id' => '4',
            'catagory' => 'Normal',
            'price' => '4000',
            'type' => 'Indian',
        ]);


    }
}
