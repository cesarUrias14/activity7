<?php

use Illuminate\Database\Seeder;
use App\Course;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
    
        Course::factory()->count(100)->create();
    }
}
