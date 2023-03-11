<?php

use Illuminate\Database\Seeder;

class KitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kits')->insert([
            [
                'name' => 'StarterKit',
            ],
            [
                'name' => 'Educational Robotics Kit',
            ],
            [
                'name' => 'Kit5',
            ],
        ]);
    }
}
