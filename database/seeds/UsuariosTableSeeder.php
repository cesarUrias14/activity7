<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuarios')->insert([
            [
                'name' => 'Admon',
                'email' => 'admon@robotics.com',
                'password' => bcrypt('Adm@2022'),
                'role' => 'administrative',
            ],
            [
                'name' => 'Tecmilenio',
                'email' => 'tecmilenio@robotics.com',
                'password' => bcrypt('Adm@2022'),
                'role' => 'teacher',
            ],
            [
                'name' => 'Student',
                'email' => 'student@robotics.com',
                'password' => bcrypt('Adm@2022'),
                'role' => 'student',
            ],
        ]);
    }
}
